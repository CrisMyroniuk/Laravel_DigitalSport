<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
          $table->bigIncrements('id');
          
          $table->unsignedBigInteger('user_id');
          $table->unsignedBigInteger('producto_id');
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('producto_id')->references('id')->on('productos');
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
        Schema::dropIfExists('carritos');
    }
}
