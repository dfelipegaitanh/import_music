<?php

namespace App\Providers;

use App\Classes\Lastfm;
use App\Decorators\MusicSupplierDecorator;
use App\Interfaces\MusicSupplier;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class LastfmServiceProvider extends ServiceProvider
{

    public function register(): void
    {

        $this->app->singleton(Lastfm::class, function () {
            $lastFm = new Lastfm(new Client(), config('lastfm.api_key'));
            return new MusicSupplierDecorator($lastFm);
        });

        $this->app->singleton(MusicSupplier::class, function ($app) {
            return $app->make(Lastfm::class);
        });
    }

    public function boot(): void
    {

        Collection::macro('toCollection', function () {
            return $this->map(function ($value) {
                return is_array($value) ? collect($value) : $value;
            });
        });
    }

}
