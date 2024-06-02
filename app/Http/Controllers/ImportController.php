<?php

namespace App\Http\Controllers;

use App\Interfaces\ImporterInterface;
use App\Traits\ImporterGetterSetterTrait;
use Illuminate\Support\Facades\Artisan;

class ImportController extends Controller implements ImporterInterface
{

    use ImporterGetterSetterTrait;

    public function import(string $user = null)
    {

        $this->setUser($user);

        Artisan::call("lastfm:user-data", [
            'user_name' => $this->getUserName(),
        ]);
    }

}
