<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tarjeta;
use App\Models\Cuenta;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Models\\Tarjeta>
 */
class TarjetaFactory extends Factory
{
    protected $model = Tarjeta::class;

    public function definition()
    {

        $datos_encriptados = [
            'numero' => encrypt('1234123412341234'),
            'fecha_expiracion' => encrypt('12/23'),
            'cvc' => encrypt('123'),
        ];
        return [
            'usuario_id' => 1,
            'cuenta_bancaria_id' => 1,

            'nombre_titular' => "Jorge Arciniega",

            'datos_encriptados' => json_encode($datos_encriptados),
        ];
    }
}
