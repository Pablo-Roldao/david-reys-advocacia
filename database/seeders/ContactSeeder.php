<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Contact::factory()->create([
            'email' => 'davidreysadvogado@gmail.com.br',
            'whatsapp' => '87981237696',
            'instagram_link' => 'https://www.instagram.com/davidreys_advocacia/',
            'facebook_link' => 'https://www.facebook.com/davidreysadvocacia/'
        ]);*/
        Contact::factory()->create([
            'email' => 'connectatecnologia.dev@gmail.com',
            'whatsapp' => '87981237696',
            'instagram_link' => 'https://www.instagram.com/connecta/',
            'facebook_link' => 'https://www.facebook.com/connecta/',
            'pre_written_whatsapp_message' => 'Olá, David Reys!'
        ]);
    }
}
