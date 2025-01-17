<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('last_fm_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('subscriber');
            $table->string('realname');
            $table->string('bootstrap');
            $table->json('image');
            $table->json('registered');
            $table->string('country');
            $table->string('gender');
            $table->string('url');
            $table->string('type');
            $table->dateTime('date_first_scrobble')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('last_fm_users');
    }

};
