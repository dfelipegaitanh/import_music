<?php

use App\Models\LastFmPeriodTime;
use App\Models\LastFmPeriodTimeUser;
use App\Models\LastFmSong;
use App\Models\LastFmUser;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::withoutForeignKeyConstraints(function(){

            Schema::table('last_fm_song_stats', function (Blueprint $table) {
                $table->dropForeign('last_fm_song_stats_last_fm_user_id_foreign');
                $table->dropForeign('last_fm_song_stats_last_fm_period_time_id_foreign');
                $table->dropColumn(['last_fm_user_id','last_fm_period_time_id']);
                $table->foreignIdFor(LastFmPeriodTimeUser::class )->constrained('last_fm_period_time_users');
            });

        });

    }

    public function down(): void
    {
        Schema::table('last_fm_song_stats', function (Blueprint $table) {
            $table->dropForeign('last_fm_song_stats_last_fm_period_time_user_id_foreign');
            $table->dropColumn(['last_fm_period_time_user_id']);
            $table->foreignIdFor(LastFmUser::class)->constrained('last_fm_users');
            $table->foreignIdFor(LastFmPeriodTime::class)->constrained('last_fm_period_times');
        });
    }

};
