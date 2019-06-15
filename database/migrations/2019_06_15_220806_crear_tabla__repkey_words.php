<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRepkeyWords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RepkeyWords', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('idRepositorio'); 
            $table->unsignedInteger('idKeyword');
            $table->foreign('idRepositorio')->references('id')->on('repositorios');
            $table->foreign('idKeyword')->references('id')->on('keyWords');
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
        Schema::dropIfExists('RepkeyWords');
    }
}
