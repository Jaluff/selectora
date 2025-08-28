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
    Schema::create('employee_qualities', function (Blueprint $table) {
      $table->id();
      $table->foreignId('employee_id')->constrained()->onDelete('cascade');
      $table->string('sabados');
      $table->string('comidas');
      $table->string('limpias');
      $table->string('planchas');
      $table->string('cocinas');
      $table->string('barrio_privado');
      $table->string('detallista');
      $table->string('casa_grande');
      $table->string('ninios');
      $table->string('roba');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('qualities');
  }
};
