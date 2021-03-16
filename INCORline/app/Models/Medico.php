<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    // use HasFactory;
    protected $table="medicos";
    protected $primaryKey="idmedico";
    protected $fillable=['especialidad','ci','idusuario','fechaNac','direccion'];

    public $timestamps = false;
}
