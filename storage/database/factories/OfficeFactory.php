<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Office>
 */
class OfficeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city(),
            'phone' => $this->faker->numerify('(##) #####-####'),
            'address' => $this->faker->address(),
            'map_link' => 'https://www.google.com.br/maps/preview',
        ];
    }
}
