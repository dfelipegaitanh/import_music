<?php

use App\Models\LastFmUser;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Schema::table('last_fm_period_times', function (Blueprint $table) {
                $table->dropForeign('last_fm_period_times_last_fm_user_id_foreign');
                $table->dropColumn(['processed', 'last_fm_user_id']);
            });
        });
    }

    public function down(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Schema::table('last_fm_period_times', function (Blueprint $table) {
                $table->foreignIdFor(LastFmUser::class)->constrained('last_fm_users');
                $table->boolean('processed')->default(false);
            });
        });
    }

};
