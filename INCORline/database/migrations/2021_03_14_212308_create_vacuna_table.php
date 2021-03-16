<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacuna', function (Blueprint $table) {
            $table->integer('idvacuna', true);
            $table->date('fecha')->nullable();
            $table->string('nombre', 90)->nullable();
            $table->string('descripcion', 120)->nullable();
            $table->string('dosis', 90)->nullable();
            $table->string('edad', 90)->nullable();
            $table->unsignedBigInteger('idpaciente')->nullable();
            $table->foreign('idpaciente', 'idpacientevacuna')->references('idpaciente')->on('paciente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacuna');
    }
}
