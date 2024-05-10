<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('signos', function (Blueprint $table) {
            $table->id('id_signo');
            $table->string('nombre'); 
            $table->string('descripcion', 600);
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