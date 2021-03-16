<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    //use HasFactory;
    protected $table="dias";
    protected $primaryKey="iddia";
    protected $fillable=['nombre'];
    
    public $timestamps=false;
}
