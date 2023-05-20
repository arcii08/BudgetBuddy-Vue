<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaBancaria extends Model
{
    use HasFactory;
    protected $table ='cuenta_bancaria';
    protected $fillable = [
        'nombre_titular',
        'banco',
        'tipo_cuenta',
        'numero_cuenta',
        'monto'
    ];
}
