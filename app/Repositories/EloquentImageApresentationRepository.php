<?php

namespace App\Repositories;

use App\Enum\ImageTypesEnum;
use App\Models\Image\ImageApresentation;
use Illuminate\Database\Eloquent\Collection;

class EloquentImageApresentationRepository
{

    public static function getAll(): Collection
    {
        return ImageApresentation::all();
    }

    public static function getAllDesktop(): Collection
    {
        return ImageApresentation::query()->where('type', ImageTypesEnum::DESKTOP)->get();
    }

    public static function getAllMobile(): Collection
    {
        return ImageApresentation::query()->where('type', ImageTypesEnum::MOBILE)->get();
    }

    public static function getById(int $id): ImageApresentation
    {
        return ImageApresentation::find($id);
    }

    public static function store(ImageApresentation $imageApresentation): void
    {
        $imageApresentation->save();
    }

    public static function update(int $id, ImageApresentation $newImageApresentationData): void
    {
        self::getById($id)->fill($newImageApresentationData->toArray())->save();
    }

    public static function delete(int $id): void
    {
        self::getById($id)->delete();
    }

}
