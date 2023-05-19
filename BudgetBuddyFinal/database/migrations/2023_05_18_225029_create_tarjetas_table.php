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
        Schema::create('tarjetas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_titular');
            $table->string('numero');
            $table->date('fecha_expiracion');
            $table->string('cvc');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('cuenta_bancaria_id');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('cuenta_bancaria_id')->references('id')->on('cuenta_bancaria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarjetas');
    }
};
