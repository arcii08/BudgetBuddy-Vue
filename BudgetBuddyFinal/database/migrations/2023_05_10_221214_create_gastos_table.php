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
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->date('fecha');
            $table->decimal('monto', 10, 2);
            $table->unsignedBigInteger('id_cuenta_bancaria');
            $table->unsignedBigInteger('id_tarjeta')->nullable();
            $table->unsignedBigInteger('id_usuario');
            $table->timestamps();

            $table->foreign('id_cuenta_bancaria')->references('id')->on('cuentas_bancarias');
            $table->foreign('id_tarjeta')->references('id')->on('tarjetas');
            $table->foreign('id_usuario')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos');
    }
};
