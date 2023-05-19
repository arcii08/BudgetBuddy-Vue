<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gasto>
 */
class GastoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $marcas = [
            'Nomina',
            'Adidas',
            'Puma',
            'Reebok',
            'Converse',
            'Apple',
            'Samsung',
            'Sony',
            'Microsoft',
            'Google',
            'Coca-Cola',
            'Pepsi',
            'Toyota',
            'BMW',
            'Mercedes-Benz',
            'Amazon',
            'Netflix',
            'Disney',
            'Burger King',
            'Starbucks'
        ];


        return [
            'monto' => $this->faker->randomFloat(2, -10, -1000),
            'descripcion' => $this->faker->randomElement($marcas),
            'fecha' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'usuario_id' => 1,
            'tarjeta_id' => 1,
        ];
    }
}
