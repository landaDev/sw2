<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padres', function (Blueprint $table) {
            $table->integer('idpadres', true);
            $table->string('nombreM', 45);
            $table->string('apellidoM', 45);
            $table->string('ciM', 20)->nullable();
            $table->date('fechanacM')->nullable();
            $table->string('nombreP', 45)->nullable();
            $table->string('apellidoP', 45)->nullable();
            $table->string('ciP', 20)->nullable();
            $table->date('fechanac')->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('celularM', 30)->nullable();
            $table->string('celularP', 30)->nullable();
            $table->string('estado', 20)->nullable();
            $table->unsignedBigInteger('idpaciente')->nullable();
            $table->foreign('idpaciente', 'idpacientepadres')->references('idpaciente')->on('paciente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('padres');
    }
}
