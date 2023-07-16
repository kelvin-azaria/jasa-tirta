<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('announcements', function (Blueprint $table) {
      $table->id();
      $table->string('title')->index();
      $table->longText('message')->nullable();
      $table->string('type')->index();
      $table->string('bg_color')->nullable();
      $table->string('text_color')->nullable();
      $table->boolean('active')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('announcements');
  }
}
