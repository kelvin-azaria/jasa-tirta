<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MergeKtpAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contestants', function (Blueprint $table) {
            $table->dropColumn('ktp_province');
            $table->dropColumn('ktp_city');

            $table->text('id_card_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contestants', function (Blueprint $table) {
            $table->dropColumn('id_card_address');

            $table->string('ktp_province');
            $table->string('ktp_city');
        });
    }
}
