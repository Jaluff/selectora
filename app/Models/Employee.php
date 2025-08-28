<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  protected $fillable = [
    'nombre',
    'edad',
    'correo_electronico',
    'documento',
    'telefono',
    'telefono2',
    'direccion',
    'localidad',
    'fecha_de_nacimiento',
  ];

  public function jobProfile()
  {
    return $this->hasOne(EmployeeJobProfile::class);
  }

  public function qualities()
  {
    return $this->hasOne(EmployeeQuality::class);
  }

  public function references()
  {
    return $this->hasOne(EmployeeReference::class);
  }
}
