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
    Schema::create('employee_job_profiles', function (Blueprint $table) {
      $table->id();
      $table->foreignId('employee_id')->constrained()->onDelete('cascade');
      $table->string('referencia_postulacion');
      $table->string('preferencias');
      $table->string('zonas');
      $table->string('horas');
      $table->string('experiencia');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('job_profiles');
  }
};
