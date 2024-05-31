<?php

use App\Models\LastFmAlbum;
use App\Models\LastFmSong;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('last_fm_album_songs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(LastFmAlbum::class)->constrained();
            $table->foreignIdFor(LastFmSong::class)->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('last_fm_album_songs');
    }

};
