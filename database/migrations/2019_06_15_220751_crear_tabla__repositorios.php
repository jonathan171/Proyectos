<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRepositorios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositorios', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('titulo');
            $table->date('fecha');
            $table->longtext('resumen');
            $table->longtext('abstract');
            $table->string('proyectimg');
            $table->string('programa');
            $table->unsignedInteger('estado'); 
            $table->unsignedInteger('tipoRepositorio');
            $table->foreign('estado')->references('id')->on('estados');
             $table->foreign('tipoRepositorio')->references('id')->on('tipoRepositorio');
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
        Schema::dropIfExists('repositorios');
    }
}
