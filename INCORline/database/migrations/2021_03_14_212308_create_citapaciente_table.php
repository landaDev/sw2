<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitapacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citapaciente', function (Blueprint $table) {
            $table->integer('idcitapaciente', true);
            $table->unsignedBigInteger('idcita')->nullable();
            $table->unsignedBigInteger('idpaciente')->nullable();
            $table->string('estado', 20)->nullable();
            $table->foreign('idcita', 'idcitacitapaciente')->references('idcita')->on('cita')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('idpaciente', 'idpacientecitapaciente')->references('idpaciente')->on('paciente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citapaciente');
    }
}
