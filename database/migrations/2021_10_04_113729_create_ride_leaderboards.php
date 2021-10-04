<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRideLeaderboards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ride_leaderboards', function (Blueprint $table) {
            $table->id();
            $table->integer('position')->nullable();
            $table->string('participant_name');
            $table->string('participant_gender');
            $table->string('activity_date');
            $table->string('activity_length');
            $table->string('activity_duration');
            $table->string('strava_activity_url_1');
            $table->string('strava_activity_url_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ride_leaderboards');
    }
}
