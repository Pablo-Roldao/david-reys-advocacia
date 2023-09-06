<?php

namespace App\Repositories;

use App\Models\Office;
use Illuminate\Database\Eloquent\Collection;

class EloquentOfficeRepository
{

    public static function getAll(): Collection
    {
        return Office::all();
    }

    public static function getById(int $id): Office
    {
        return Office::find($id);
    }

    public static function store(Office $teamMember): void
    {
        $teamMember->save();
    }

    public static function update(int $id, Office $newOfficeData): void
    {
        self::getById($id)->fill($newOfficeData->toArray())->save();
    }

    public static function delete(int $id): void
    {
        self::getById($id)->delete();
    }

    public static function search(string $search)
    {
        return empty($search)
            ? Office::query()
            : Office::query()
                ->where('name', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%');
    }

}
