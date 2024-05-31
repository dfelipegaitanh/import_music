<?php

namespace App\Console\Commands;

use Barryvanveen\Lastfm\Lastfm;
use Illuminate\Console\Command;

class LastFmUserDataCommand extends Command
{

    protected $signature = 'lastFm:user-data';

    protected $description = 'Command description';

    public function handle(Lastfm $lastfm): void
    {
        echo 1;
    }

}
