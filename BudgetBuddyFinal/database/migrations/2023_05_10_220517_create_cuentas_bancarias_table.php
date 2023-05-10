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
        Schema::create('cuentas_bancarias', function (Blueprint $table) {
            $table->id();
            $table->string('banco');
            $table->string('tipo_cuenta');
            $table->string('numero_cuenta');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuentas_bancarias');
    }
};
