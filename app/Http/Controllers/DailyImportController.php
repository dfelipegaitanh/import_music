<?php

namespace App\Http\Controllers;

use App\Interfaces\ImporterInterface;
use App\Models\LastFmArtist;

class DailyImportController extends Controller implements ImporterInterface
{

    public function import(string $user = null)
    {
        $user ??= config('lastfm.user');
        LastFmArtist::where('name');

        $a = 1;
        echo $user;
    }

}
