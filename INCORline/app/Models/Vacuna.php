<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    //use HasFactory;
    protected $table="vacunas";
    protected $primaryKey="idvacuna";
    protected $fillable=['fecha','nombre','descripcion','dosis','edad','idpaciente'];

    public $timestamps =false;
}
