<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingreso>
 */
class IngresoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $tiposIngreso = [
            'Salario',
            'Ventas',
            'Comisiones',
            'Inversiones',
            'Regalías',
            'Alquileres',
            'Dividendos',
            'Bonificaciones',
            'Premios',
            'Reembolsos',
            'Otros'
        ];

        return [
            'monto' => $this->faker->randomFloat(2, 10, 1000),
            'descripcion' => $this->faker->randomElement($tiposIngreso),
            'fecha' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'usuario_id' => 1,
            'tarjeta_id' => 1,
        ];
    }
}
