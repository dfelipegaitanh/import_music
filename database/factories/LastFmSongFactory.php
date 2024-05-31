<?php

namespace Database\Factories;

use App\Models\LastFmSong;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class LastFmSongFactory extends Factory
{

    protected $model = LastFmSong::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }

}
