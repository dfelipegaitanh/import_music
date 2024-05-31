<?php

namespace Database\Factories;

use App\Models\LastFmArtist;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class LastFmArtistFactory extends Factory
{

    protected $model = LastFmArtist::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }

}
