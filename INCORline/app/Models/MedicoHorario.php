<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicoHorario extends Model
{
    //use HasFactory;
    protected $table="medicohorarios";
    protected $primaryKey="idmedicohorario";
    protected $fillable=['idmedico','idhorario','estado','iddia'];

    public $timestamps=false;
}
