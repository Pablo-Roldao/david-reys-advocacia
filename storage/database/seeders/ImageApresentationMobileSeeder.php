<?php

namespace Database\Seeders;

use App\Models\Image\ImageApresentationMobile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageApresentationMobileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ImageApresentationMobile::factory()->create([
            'photo_path' => 'image-apresentation-mobile/apresentation-mobile.png'
        ]);

        ImageApresentationMobile::factory()->create([
            'photo_path' => 'image-apresentation-mobile/apresentation-mobile-1.png'
        ]);
    }
}
