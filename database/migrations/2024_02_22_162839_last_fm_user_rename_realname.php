<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('last_fm_users', function (Blueprint $table) {
            $table->renameColumn('realname', 'real_name');
            $table->json('image')->change();
            $table->json('registered')->change();
        });

        Schema::table('last_fm_user_stats', function (Blueprint $table) {
            $table->renameColumn('playcount', 'play_count');
        });
    }

    public function down(): void
    {
        Schema::table('last_fm_users', function (Blueprint $table) {
            $table->renameColumn( 'real_name', 'realname');
        });

        Schema::table('last_fm_user_stats', function (Blueprint $table) {
            $table->renameColumn('play_count' , 'playcount');
        });
    }

};
