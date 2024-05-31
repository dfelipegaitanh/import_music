<?php

namespace Database\Factories;

use App\Models\LastFmUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class LastFmUserFactory extends Factory
{

    protected $model = LastFmUser::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }

}
