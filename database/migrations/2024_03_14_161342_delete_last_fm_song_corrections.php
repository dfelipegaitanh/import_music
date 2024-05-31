<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::drop('last_fm_song_corrections');
    }

    public function down(): void
    {
        Schema::create('last_fm_song_corrections', function (Blueprint $table) {
            $table->increments('id');
        });
    }

};
