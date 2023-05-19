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
            //     $table->unsignedBigInteger('cuenta_bancaria_id');
            $table->unsignedBigInteger('usuario_id');
            $table->string('numero');
            $table->string('nombre_titular');
            $table->date('fecha_expiracion')->nullable();
            $table->decimal('monto', 10, 2);
            $table->string('cvc')->nullable();
            //$table->foreign('cuenta_bancaria_id')->references('id')->on('cuentas_bancarias');
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