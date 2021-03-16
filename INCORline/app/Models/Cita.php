<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    // use HasFactory;
    protected $table="cita";
    protected $primaryKey="idcita";
    protected $fillable=['fecha','idcliente','idmedico','idmedicohorario'];

    public $timestamps=false;
}
