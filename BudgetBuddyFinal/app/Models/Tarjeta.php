<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Tarjeta extends Model
{
    use HasFactory;

    protected $fillable = [

        'usuario_id',
        'numero',
        'nombre_titular',
        'fecha_expiracion',
        'monto',
        'cvc',

    ];

    protected $dispatchesEvents = [
        'created' => TarjetaCreated::class,
    ];
}
