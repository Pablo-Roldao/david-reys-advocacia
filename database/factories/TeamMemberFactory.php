<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $reflectionPositionEnum = new \ReflectionClass(\App\Enum\PositionEnum::class);
        $positions = $reflectionPositionEnum->getConstants();
        return [
            'name' => $this->faker->name(),
            'position' => $this->faker->randomElement($positions),
            'description' => $this->faker->realText()
        ];
    }
}
