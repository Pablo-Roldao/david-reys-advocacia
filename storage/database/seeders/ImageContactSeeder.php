<?php

namespace Database\Seeders;

use App\Models\Image\ImageContact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ImageContact::factory()->create([
            'photo_path' => 'image-contact/contact.jpg'
        ]);
    }
}
