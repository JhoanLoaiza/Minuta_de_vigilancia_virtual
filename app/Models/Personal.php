<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{   
     use HasFactory; 
     protected $fillable = ['nombres', 'apellidos', 'grado', 'placa', 'numero_arma', 'sigla_vehiculo', 'chaleco_balistico', 'lugar_de_faccion', 'mision_por_cumplir'];
}   
