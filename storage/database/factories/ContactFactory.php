<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email' => $this->faker->email(),
            'whatsapp' => $this->faker->numerify('(##) #####-####'),
            'pre_written_whatsapp_message' => $this->faker->text(),
            'instagram_link' => 'instagram.com.br',
            'facebook_link' => 'facebook.com.br'
        ];
    }
}
