<?php

namespace App\Http\Controllers;

use App\Interfaces\ImporterInterface;
use App\Traits\ImporterGetterSetterTrait;
use Illuminate\Support\Facades\Artisan;

class DailyImportController extends Controller implements ImporterInterface
{


    use ImporterGetterSetterTrait;

    public function import(string $user = null)
    {

        $this->setUser($user);
        
        Artisan::call("last_fm:user-data", [
            'userName' => $this->getUserName(),
        ]);
    }


}
