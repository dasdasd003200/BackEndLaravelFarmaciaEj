<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>$this->faker->numberBetween(1,10),
            'cliente_id'=>$this->faker->numberBetween(5,15),
            'forma_pago'=>$this->faker->randomElement(['efectivo','QR','Transaccion']),
            'pago'=>$this->faker->numberBetween(20,50),
            'fecha'=>$this->faker->date(),
        ];
    }
}
