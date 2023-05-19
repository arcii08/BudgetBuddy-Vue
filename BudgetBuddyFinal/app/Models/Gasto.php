<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'descripcion',
        'monto',
        'fecha',
        'usuario_id',
        'tarjeta_id',
    ];
}
