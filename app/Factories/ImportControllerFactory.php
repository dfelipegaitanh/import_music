<?php

namespace App\Factories;

use App\Http\Controllers\DailyImportController;
use App\Http\Controllers\MonthlyImportController;

class ImportControllerFactory
{

    public static function create($frequency): DailyImportController|MonthlyImportController
    {
        return match ($frequency) {
            'daily'   => new DailyImportController(),
            'monthly' => new MonthlyImportController(),
            default   => throw new \InvalidArgumentException("Invalid frequency: $frequency"),
        };
    }

}
