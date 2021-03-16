<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('idusuario', true);
            $table->string('nombre', 35);
            $table->string('apellido', 45);
            $table->string('celular', 45);
            $table->string('email', 45);
            $table->string('password', 10);
            $table->string('usuario', 20);
            $table->unsignedBigInteger('idGrupoUsuario')->nullable();
            $table->foreign('idGrupoUsuario', 'IdGrupoUsuario')->references('idgrupousuario')->on('grupousuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
