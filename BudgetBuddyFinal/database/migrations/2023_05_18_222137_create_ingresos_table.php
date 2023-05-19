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
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id();
            $table->decimal('monto', 10, 2);
            $table->string('descripcion');
            $table->date('fecha');
            // $table->unsignedBigInteger('tarjeta_id');
            $table->unsignedBigInteger('usuario_id');
            
            // $table->foreign('tarjeta_id')->references('id')->on('tarjetas');
            $table->foreign('usuario_id')->references('id')->on('users');
            // $table->foreign('tarjeta_id')->constraints('tarjeta_id')->on('tarjetas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingresos');
    }
};
