<?php

namespace App\Repositories;

use App\Models\About;

class EloquentAboutRepository
{

    public static function get() {
        return About::all()->first();
    }

    public static function update(About $about) {
        $about->save();
    }

}
