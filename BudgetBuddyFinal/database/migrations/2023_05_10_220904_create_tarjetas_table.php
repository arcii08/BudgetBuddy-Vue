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
            $table->string('tipo');
            $table->string('numero');
            $table->unsignedBigInteger('cuenta_bancaria_id');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();

            $table->foreign('cuenta_bancaria_id')->references('id')->on('cuentas_bancarias');
            $table->foreign('usuario_id')->references('id')->on('users');
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
