<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParticipantWorkUnitToRunLeaderboards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('run_leaderboards', function (Blueprint $table) {
            $table->string('participant_work_unit')
                  ->nullable()
                  ->after('participant_gender');
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
            $table->dropColumn('participant_work_unit');
        });
    }
}
