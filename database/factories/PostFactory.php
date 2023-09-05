<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $paragraphs = [];
        for ($i = 0; $i < 5; $i++) {
            $paragraph = $this->faker->text(1000);
            $paragraphs[] = $paragraph;
        }

        $formattedContent = implode("\n\t\t\t\t", $paragraphs);

        return [
            'title' => $this->faker->sentence(),
            'content' => $formattedContent,
            'author' => $this->faker->name()
        ];
    }

}
