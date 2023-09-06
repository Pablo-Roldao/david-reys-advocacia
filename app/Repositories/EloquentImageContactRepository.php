<?php

namespace App\Repositories;

use App\Models\Image\ImageContact;

class EloquentImageContactRepository
{

    public static function get(): ImageContact
    {
        return ImageContact::all()->first();
    }

    public static function update(ImageContact $imageContact): void
    {
        $imageContact->save();
    }

}
