<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('last_fm_artists', function (Blueprint $table) {
            $table->string('mbid')->default('');
        });

        Schema::table('last_fm_songs', function (Blueprint $table) {
            $table->string('mbid')->default('');
        });
    }

    public function down(): void
    {
        Schema::table('last_fm_artists', function (Blueprint $table) {
            $table->dropColumn(['mbid']);
        });

        Schema::table('last_fm_songs', function (Blueprint $table) {
            $table->dropColumn(['mbid']);
        });
    }

};
