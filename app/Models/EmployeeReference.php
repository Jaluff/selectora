<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeReference extends Model
{
  protected $fillable = [
    'employee_id',
    'nombre_referente',
    'telefono_referente',
    'correo_referente',
    'fechas_ingreso',
    'fechas_salida',
    'referencia',
  ];
}
