<?php

use App\Models\LastFmPeriodTime;
use App\Models\LastFmSong;
use App\Models\LastFmUser;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('last_fm_song_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('userPlayCount');
            $table->foreignIdFor(LastFmSong::class)->constrained('last_fm_songs');
            $table->foreignIdFor(LastFmUser::class)->constrained('last_fm_users');
            $table->foreignIdFor(LastFmPeriodTime::class)->constrained('last_fm_period_times');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('last_fm_song_stats');
    }

};
