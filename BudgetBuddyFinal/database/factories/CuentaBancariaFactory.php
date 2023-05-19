<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CuentaBancaria>
 */
class CuentaBancariaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'banco' => $this->faker->randomElement(['Banamex', 'HSBC', 'Bancomer', 'Santander', 'Banorte']),
            'tipo_cuenta' => $this->faker->randomElement(['Debito', 'Credito']),
            'numero_cuenta' => $this->faker->bankAccountNumber,
            'clabe' => $this->faker->bankAccountNumber,
            'fecha_vencimiento' => $this->faker->dateTimeBetween('now', '+5 years'),
        ];
    }
}
