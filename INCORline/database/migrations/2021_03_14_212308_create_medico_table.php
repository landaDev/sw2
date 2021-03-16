<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico', function (Blueprint $table) {
            $table->integer('idmedico', true);
            $table->string('especialidad', 50)->nullable();
            $table->string('ci', 20)->nullable();
            $table->unsignedBigInteger('idusuario')->nullable();
            $table->date('fechaNac')->nullable();
            $table->string('direccion', 200)->nullable();
            $table->foreign('idusuario', 'idusuariomedico')->references('idusuario')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medico');
    }
}
