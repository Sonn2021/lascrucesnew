<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_list', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_reservation')->unsigned();
            $table->foreign('id_reservation')->references('id')->on('reservation');
            $table->bigInteger('servicio')->unsigned();
            $table->foreign('servicio')->references('id')->on('services');
            $table->integer('cantidad');
            $table->bigInteger('id_horario')->nullable();
            $table->longText('horario')->nullable();
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
        Schema::dropIfExists('services_list');
    }
}
