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
        Schema::create('horoscopos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('signo')->constrained('signos','id_signo')->onDelete('cascade');
            $table->string('descripcion', 500);
            $table->enum('formato', ['diario', 'semanal', 'mensual']); 
            $table->date('fecha');
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
