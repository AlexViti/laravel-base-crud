<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('comics', function (Blueprint $table) {
      $table->id();
      $table->string('title', 200);
      $table->text('description')->nullable();
      $table->string('thumb', 200)->nullable();
      $table->integer('price')->default(0);
      $table->string('series', 200);
      $table->date('sale_date');
      $table->string('type', 50)->default('comic book');
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
    Schema::dropIfExists('comics');
  }
}
