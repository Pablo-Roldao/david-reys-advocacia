<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'home_title' => $this->faker->sentence(),
            'title' => $this->faker->sentence(),
            'home_content' => $this->faker->text(),
            'content' => $this->faker->text()
        ];
    }
}
