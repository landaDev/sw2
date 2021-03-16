<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacion', function (Blueprint $table) {
            $table->integer('idnotificacion', true);
            $table->string('mensaje', 300)->nullable();
            $table->string('tipo', 150)->nullable();
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->unsignedBigInteger('idusuario')->nullable();
            $table->unsignedBigInteger('idcita')->nullable();
            $table->foreign('idcita', 'idcitanotificacion')->references('idcita')->on('cita')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('idusuario', 'idusuarionotificacion')->references('idusuario')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificacion');
    }
}
