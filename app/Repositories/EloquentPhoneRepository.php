<?php

namespace App\Repositories;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Collection;

class EloquentPhoneRepository
{

    public static function getAll(): Collection
    {
        return Phone::orderBy('is_whatsapp', 'desc')->get();
    }

    public static function getById(int $id): Phone
    {
        return Phone::find($id);
    }

    public static function create(Phone $phone): void
    {
        $phone->save();
    }

    public static function update(int $id, Phone $newPhoneData): void
    {
        self::getById($id)->fill($newPhoneData->toArray())->save();
    }

    public static function delete(int $id): void
    {
        self::getById($id)->delete();
    }

}
