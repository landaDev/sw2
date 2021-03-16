<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->integer('idpaciente', true);
            $table->string('ci', 20)->nullable();
            $table->string('nombre', 100)->nullable();
            $table->string('apellido', 100)->nullable();
            $table->date('fechanac')->nullable();
            $table->string('edad', 45)->nullable();
            $table->date('fechaingreso')->nullable();
            $table->string('codigo', 100)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('medico', 45)->nullable();
            $table->string('estado', 20)->nullable();
            
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
