<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // use HasFactory;
    protected $table="usuario";
    protected $primaryKey="idusuario";
    protected  $fillable=['nombre','apelido','celular','email','password','usuaerio','idGrupoUsuario'];

    public $timestamps=false;
}
