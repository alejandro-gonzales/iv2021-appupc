<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = "persona";
    protected $fillable = ['id', 'nombre','apellido','direccion','celular','ci','geolocalizacion','created_at','updated_at'];

}
