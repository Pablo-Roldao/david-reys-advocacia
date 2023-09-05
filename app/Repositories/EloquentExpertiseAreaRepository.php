<?php

namespace App\Repositories;

use App\Models\ExpertiseArea;

class EloquentExpertiseAreaRepository
{

    public static function get(): ExpertiseArea
    {
        return ExpertiseArea::all()->first();
    }

    public static function update(ExpertiseArea $expertiseArea): void
    {
        $expertiseArea->save();
    }

}
