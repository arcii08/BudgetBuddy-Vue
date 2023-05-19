<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaBancaria extends Model
{
    use HasFactory;

    protected $fillable = [
        'banco',
        'tipo_cuenta',
        'numero_cuenta',
        'usuario_id',
    ];

    public function ingresos()
    {
        return $this->hasMany(Ingreso::class);
    }

    public function tarjetas()
    {
        return $this->hasMany(Tarjeta::class);
    }
}
