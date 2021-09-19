<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePubgPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pubg_players', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pubg_team_id');
            $table->string('player_nickname');
            $table->string('player_npp');
            $table->foreign('pubg_team_id')->references('id')->on('pubg_teams')->onDelete('cascade');
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
        Schema::dropIfExists('pubg_players');
    }
}
