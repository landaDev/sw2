<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padres extends Model
{
    //use HasFactory;
    protected $table="padres";
    protected $primaryKey="idpadres";
    protected $fillable=['nombrem','apellidom','cim','fechanacm','nombrep','apellidop','cip','fechanacp','telefono','celularm','celularp','estado','idpaciente'];

    public $timestamps=false;
}
