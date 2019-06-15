<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAutRep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autRep', function (Blueprint $table) {
            $table->Increments('id');
             $table->unsignedInteger('idRepositorio');
            $table->unsignedInteger('idAutor');
            $table->foreign('idRepositorio')->references('id')->on('repositorios');
            $table->foreign('idAutor')->references('id')->on('autores');
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
        Schema::dropIfExists('AutRep');
    }
}
