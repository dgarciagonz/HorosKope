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
        Schema::create('informes', function (Blueprint $table) {
            $table->id('id_reporte');
            $table->foreignId('id_publicacion')->nullable()->constrained('publicaciones', 'id_publicacion')->onDelete('cascade');
            $table->foreignId('id_usuario')->nullable()->constrained('users', 'id_usuario')->onDelete('cascade');
            $table->foreignId('id_comentario')->nullable()->constrained('comentarios', 'id_comentario')->onDelete('cascade');
            $table->string('motivo');
            $table->string('solucion')->nullable();
            $table->dateTime('fecha_creacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
