<?php

namespace App\Repositories;

use App\Models\Image\ImageAbout;

class EloquentImageAboutRespository
{

    public static function get(): ImageAbout
    {
        return ImageAbout::all()->first();
    }

    public static function update(ImageAbout $imageContact): void
    {
        $imageContact->save();
    }

}
