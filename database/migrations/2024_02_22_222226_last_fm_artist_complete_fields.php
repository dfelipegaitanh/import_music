<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('last_fm_artists', function (Blueprint $table) {
            $table->string('url');
            $table->json('image');
            $table->smallInteger('streamable');
            $table->json('bio');
        });
    }

    public function down(): void
    {
        Schema::table('last_fm_artists', function (Blueprint $table) {
            $table->dropColumn(['url', 'image', 'streamable', 'bio']);
        });
    }

};
