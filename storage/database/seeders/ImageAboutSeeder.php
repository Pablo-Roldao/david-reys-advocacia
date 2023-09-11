<?php

namespace Database\Seeders;

use App\Models\Image\ImageAbout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ImageAbout::factory()->create([
            'photo_path' => 'image-about/about.png'
        ]);
    }
}
