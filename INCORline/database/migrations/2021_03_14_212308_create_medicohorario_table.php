<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicohorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicohorario', function (Blueprint $table) {
            $table->integer('idmedicohorario', true);
            $table->unsignedBigInteger('idmedico')->nullable();
            $table->unsignedBigInteger('idhorario')->nullable();
            $table->unsignedBigInteger('iddia')->nullable()->index('iddia');
            $table->string('estado', 45)->nullable();
            $table->foreign('iddia', 'idhorariomedicohorario')->references('iddia')->on('dia')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('idhorario', 'idhorariomedicohorario')->references('idhorario')->on('horario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('idmedico', 'idmedicomedicohorario')->references('idmedico')->on('medico')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicohorario');
    }
}
