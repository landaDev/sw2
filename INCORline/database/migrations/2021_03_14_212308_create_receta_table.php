<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receta', function (Blueprint $table) {
            $table->integer('idreceta', true);
            $table->string('medicamento', 90)->nullable();
            $table->string('dosis', 90)->nullable();
            $table->string('indicaciones', 120)->nullable();
            $table->date('fecha')->nullable();
            $table->unsignedBigInteger('idpaciente')->nullable();
            $table->foreign('idpaciente', 'idpacientereceta')->references('idpaciente')->on('paciente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receta');
    }
}
