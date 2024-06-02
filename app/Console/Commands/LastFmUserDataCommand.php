<?php

namespace App\Console\Commands;

use App\Classes\Lastfm;
use Illuminate\Console\Command;

class LastFmUserDataCommand extends Command
{

    protected $signature = 'lastFm:user-data {user_name?}';

    protected $description = 'Command description';

    public function handle(Lastfm $lastfm): void
    {

        $user_name = $this->argument('user_name') ?? config('lastfm.userName');

        $user_info = $lastfm->userInfo(username: $user_name)->get();


        $lastfmUserData = $lastfm->get();
        echo 1;
    }

}
