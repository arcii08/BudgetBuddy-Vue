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
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('tarjeta_id')->nullable();
            $table->date('fecha')->nullable();
            $table->foreign('tarjeta_id')->references('id')->on('tarjetas');
            $table->foreign('usuario_id')->references('id')->on('users');
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
