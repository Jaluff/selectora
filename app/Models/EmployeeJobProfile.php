<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeJobProfile extends Model
{
  protected $fillable = [
    'employee_id',
    'referencia',
    'preferencias',
    'zonas',
    'horas',
    'experiencia',
  ];

  public function employee()
  {
    return $this->belongsTo(Employee::class);
  }
}
