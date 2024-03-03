<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion'=>$this->faker->randomElement(['pildoras','inyectables','jarabes','pomadas']),

            'imagen'=>'123456.jpg',
            'cantidad_minima'=>$this->faker->numberBetween(20,30),
            'stock'=>$this->faker->numberBetween(20,30),
            'precio_compra'=>$this->faker->numberBetween(20,30),
            'precio_venta'=>$this->faker->numberBetween(10,20),
            'categoria_id'=>$this->faker->numberBetween(10,20),

        ];
    }
}
