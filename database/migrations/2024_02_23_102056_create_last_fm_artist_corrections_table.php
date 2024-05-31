<?php

use App\Models\LastFmArtist;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('last_fm_artist_corrections', function (Blueprint $table) {
            $table->id();
            $table->string('artist');
            $table->foreignIdFor(LastFmArtist::class)->constrained('last_fm_artists');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('last_fm_artist_corrections');
    }

};
