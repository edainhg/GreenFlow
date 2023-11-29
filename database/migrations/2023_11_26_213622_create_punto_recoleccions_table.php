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
        Schema::create('puntos_recoleccion', function (Blueprint $table) {
            $table->id();
            $table->string('ubicacion', 100);
            $table->time('hora');
            $table->foreignId('residuo_aceptado_id')->constrained('residuos_aceptados');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('punto_recoleccions');
    }
};
