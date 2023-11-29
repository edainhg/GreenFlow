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
        Schema::create('mapa_resenas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_punto_recoleccion')->constrained('puntos_recoleccion');
            $table->foreignId('id_usuario')->constrained('users');
            $table->text('comentario');
            $table->integer('calificacion');
            $table->date('fecha_resena');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapa_resenas');
    }
};
