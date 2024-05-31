<?php

use App\Models\LastFmPeriodTime;
use App\Models\LastFmUser;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('last_fm_period_time_users', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(LastFmPeriodTime::class)->constrained('last_fm_period_times');
            $table->foreignIdFor(LastFmUser::class)->constrained('last_fm_users');
            $table->boolean('processed')->default(false);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('last_fm_period_time_users');
    }

};
