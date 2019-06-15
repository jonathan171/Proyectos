<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAutores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autores', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('cedula');
            $table->string('nombre');
            $table->string('email');
            $table->date('fechanac');
            $table->string('genero');
            $table->string('celular');
            $table->unsignedInteger('dptoID');
            $table->unsignedInteger('ciudadID');
             $table->foreign('dptoId')->references('id')->on('Dptos');
             $table->foreign('ciudadId')->references('id')->on('ciudades');
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
        Schema::dropIfExists('autores');
    }
}
