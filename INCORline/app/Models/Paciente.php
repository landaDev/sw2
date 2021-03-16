<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //use HasFactory;
    protected $table="pacientes";
    protected $primaryKey="idpaciente";
    protected $fillable=['ci','nombre','apellido','fechanac','edad','fechaingreso','codigo','direccion','medico','estado'];

    public $timestamps=false;
}
