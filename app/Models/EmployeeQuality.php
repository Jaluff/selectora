<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeQuality extends Model
{
  protected $fillable = [
    'employee_id',
    'sabados',
    'comidas',
    'limpias',
    'planchas',
    'cocinas',
    'barrio_privado',
    'detallista',
    'casa_grande',
    'ninios',
    'roba',
  ];
}
