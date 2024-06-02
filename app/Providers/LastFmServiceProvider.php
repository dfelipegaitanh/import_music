<?php

namespace App\Providers;

use App\Classes\Lastfm;
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

        $this->app->singleton(Lastfm::class, function () {
            return new Lastfm(new \GuzzleHttp\Client(), config('lastfm.api_key'));
        });
    }

}
