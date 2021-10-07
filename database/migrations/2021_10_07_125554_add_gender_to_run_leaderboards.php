<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGenderToRunLeaderboards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('run_leaderboards', function (Blueprint $table) {
            $table->string('participant_gender')
                  ->nullable()
                  ->after('participant_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('run_leaderboards', function (Blueprint $table) {
            $table->dropColumn('participant_gender');
        });
    }
}
