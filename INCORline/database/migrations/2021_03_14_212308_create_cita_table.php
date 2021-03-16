<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
            $table->integer('idcita', true);
            $table->date('fecha')->nullable();
            $table->unsignedBigInteger('idcliente')->nullable();
            $table->integer('idmedico')->nullable();
            $table->integer('idhorario')->nullable();
            $table->unsignedBigInteger('idmedicohorario')->nullable();
            $table->foreign('idcliente', 'idclientecita')->references('idcliente')->on('cliente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('idmedicohorario', 'idmedicohorariocita')->references('idmedicohorario')->on('medicohorario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita');
    }
}
