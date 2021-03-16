<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    //use HasFactory;
    protected $table="recetas";
    protected $primaryKey="idreceta";
    protected $fillable=['medicamento','dosis','indicaciones','fecha','idpaciente'];

    public $timestamps=false;
}
