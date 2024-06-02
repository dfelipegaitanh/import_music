<?php

namespace App\Console\Commands;

use App\Interfaces\MusicSupplier;
use Illuminate\Console\Command;

class LastfmUserDataCommand extends Command
{

    protected $signature = 'lastfm:user-data {user_name?}';

    protected $description = 'Command description';

    public function handle(MusicSupplier $lastfm): void
    {

        $user_name = $this->argument('user_name') ?? config('lastfm.userName');

        $user_info        = $lastfm->userInfo(username: $user_name)->get();
        $lastfm_user_data = $lastfm->get();
        dd($lastfm_user_data);
        echo 1;
    }

}
