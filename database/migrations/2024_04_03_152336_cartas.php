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
        Schema::create('cartas', function (Blueprint $table) {
            $table->id('id_carta');
            $table->string('nombre');
            $table->string('imagen');
            $table->string('significado', 500);
            $table->string('amor', 500);
            $table->string('dinero', 500);
            $table->string('salud', 500);
            $table->boolean('posNeg')->nullable();
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
