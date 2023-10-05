<?php

namespace App\Repositories;

use App\Models\UsefulLink;

class EloquentUsefulLinkRepository
{

    public static function store(UsefulLink $usefulLink): void
    {
        $usefulLink->save();
    }

    public static function delete(int $id): void
    {
        $usefulLink = UsefulLink::findOrFail($id);
        $usefulLink->delete();
    }

    public static function update(int $id, UsefulLink $newUsefulLink): void
    {
        $usefulLink = UsefulLink::find($id);
        $usefulLink->fill($newUsefulLink->toArray())->save();
    }

}
