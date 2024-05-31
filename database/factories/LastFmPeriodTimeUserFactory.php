<?php

namespace Database\Factories;

use App\Models\LastFmPeriodTimeUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class LastFmPeriodTimeUserFactory extends Factory
{

    protected $model = LastFmPeriodTimeUser::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }

}
