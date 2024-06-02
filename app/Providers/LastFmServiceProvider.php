<?php

namespace App\Providers;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class LastFmServiceProvider extends ServiceProvider
{

    public function register(): void
    {

    }

    public function boot(): void
    {

        Collection::macro('toCollection', function () {
            return $this->map(function ($value) {
                return is_array($value) ? collect($value) : $value;
            });
        });

        $this->app->extend(\Barryvanveen\Lastfm\LastfmServiceProvider::class, function (\Barryvanveen\Lastfm\LastfmServiceProvider $provider) {

//            $provider->app->get();
        });
    }

}
