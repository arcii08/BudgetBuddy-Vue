<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'descripcion',
        'monto',
        'fecha',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}