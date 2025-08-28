<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('employee_references', function (Blueprint $table) {
      $table->id();
      $table->foreignId('employee_id')->constrained()->onDelete('cascade');
      $table->string('nombre_referente');
      $table->string('telefono_referente');
      $table->string('correo_referente');
      $table->string('fechas_ingreso');
      $table->string('fechas_salida');
      $table->string('referencia');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('references');
  }
};
