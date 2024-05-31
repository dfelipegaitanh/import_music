<?php

use Illuminate\Support\Facades\Route;

Route::name('import.')
     ->prefix('import')
     ->group(function () {

         Route::get('/daily/{user?}', [\App\Http\Controllers\DailyImportController::class, 'import'])
              ->name('daily');
     });

