<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'usuario_id',
        'numero',
        'nombre_titular',
        'fecha_expiracion',
        'cvc',
    ];
    // protected $dispatchesEvents = [
    //     'created' => TarjetaCreated::class,
    // ];
}
