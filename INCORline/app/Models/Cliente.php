<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // use HasFactory;
    protected $table="clientes";
    protected $primaryKey="idcliente";
    protected $fillable=['nit','idusuario'];

    public $timestamps =false;
}
