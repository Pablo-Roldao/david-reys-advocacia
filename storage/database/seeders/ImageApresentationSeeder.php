<?php

namespace Database\Seeders;

use App\Enum\ImageTypesEnum;
use App\Models\Image\ImageApresentation;
use Illuminate\Database\Seeder;

class ImageApresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ImageApresentation::factory()->createMany([
            [
                'photo_path' => 'image-apresentation/apresentation.png',
                'type' => ImageTypesEnum::DESKTOP
            ],
            [
                'photo_path' => 'image-apresentation/apresentation-1.png',
                'type' => ImageTypesEnum::DESKTOP
            ]
        ]);

        ImageApresentation::factory()->createMany([
            [
                'photo_path' => 'image-apresentation/apresentation-mobile.png',
                'type' => ImageTypesEnum::MOBILE
            ],
            [
                'photo_path' => 'image-apresentation/apresentation-mobile-1.png',
                'type' => ImageTypesEnum::MOBILE
            ]
        ]);
    }
}
