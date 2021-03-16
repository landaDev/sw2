<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetricaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metrica', function (Blueprint $table) {
            $table->integer('idmetrica', true);
            $table->string('peso', 45)->nullable();
            $table->string('talla', 45)->nullable();
            $table->string('IMC', 45)->nullable();
            $table->date('fecha')->nullable();
            $table->unsignedBigInteger('idpaciente')->nullable();
            $table->foreign('idpaciente', 'idpacientemetrica')->references('idpaciente')->on('paciente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metrica');
    }
}
