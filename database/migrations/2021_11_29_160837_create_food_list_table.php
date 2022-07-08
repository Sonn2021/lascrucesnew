<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_list', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_reservation')->unsigned();
            $table->foreign('id_reservation')->references('id')->on('reservation');
            $table->bigInteger('comida')->unsigned();
            $table->foreign('comida')->references('id')->on('food');
            $table->integer('cantidad');
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
        Schema::dropIfExists('food_list');
    }
}
