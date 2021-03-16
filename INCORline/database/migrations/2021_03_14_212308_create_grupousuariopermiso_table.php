<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupousuariopermisoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupousuariopermiso', function (Blueprint $table) {
            $table->integer('idGrupoUsuarioPermiso', true);
            $table->string('estado', 45)->nullable();
            $table->unsignedBigInteger('idgrupogsuario')->nullable();
            $table->unsignedBigInteger('idpermiso')->nullable();
            $table->foreign('idgrupogsuario', 'idgrupousuariogrupousuariopermiso')->references('idgrupousuario')->on('grupousuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('idpermiso', 'idpermisogrupousuariopermiso')->references('idpermiso')->on('permiso')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupousuariopermiso');
    }
}
