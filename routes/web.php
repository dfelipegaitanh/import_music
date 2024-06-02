<?php

use App\Factories\ImportControllerFactory;
use Illuminate\Support\Facades\Route;

Route::name('import.')
     ->prefix('import')
     ->group(function () {

         Route::get('/{frequency}/{user?}', function ($frequency, $user = null) {
             $controller = ImportControllerFactory::create($frequency);
             $controller->import($user);
         });
     });

