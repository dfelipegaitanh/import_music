<?php

namespace Database\Factories;

use App\Models\LastFmPeriodTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class LastFmPeriodTimeFactory extends Factory
{

    protected $model = LastFmPeriodTime::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }

}
