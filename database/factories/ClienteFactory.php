<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
            'apellido'=>$this->faker->lastname(),
            'ci'=>$this->faker->numberBetween(5424256,9424256),
            'email'=>$this->faker->email(),
        ];
    }
}
