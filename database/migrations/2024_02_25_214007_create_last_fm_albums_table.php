<?php

use App\Models\LastFmArtist;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('last_fm_albums', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mbid');
            $table->string('url');
            $table->dateTime('release_date');
            $table->json('image');
            $table->foreignIdFor(LastFmArtist::class)->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('last_fm_albums');
    }

};