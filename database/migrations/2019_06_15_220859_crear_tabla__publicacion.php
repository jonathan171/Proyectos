<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPublicacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacion', function (Blueprint $table) {
            $table->Increments('id');
            $table->date('fechaPublicacion');
            $table->string('observacion');
            $table->unsignedInteger('idRepositorio');
            $table->unsignedInteger('idEstudiante');
            $table->foreign('idRepositorio')->references('id')->on('repositorios');
            $table->foreign('idEstudiante')->references('id')->on('users');
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
        Schema::dropIfExists('publicacion');
    }
}
