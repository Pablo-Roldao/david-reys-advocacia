<?php

namespace App\Repositories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Collection;

class EloquentServiceRepository
{

    public static function getAll(): Collection
    {
        return Service::all();
    }

    public static function getById(int $id): Service
    {
        return Service::find($id);
    }

    public static function store(Service $service): void
    {
        $service->save();
    }

    public static function update(int $id, Service $newServiceData): void
    {
        self::getById($id)->fill($newServiceData->toArray())->save();
    }

    public static function delete(int $id): void
    {
        self::getById($id)->delete();
    }

    public static function search(string $search)
    {
        return empty($search)
            ? Service::query()
            : Service::query()
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('content', 'like', '%' . $search . '%');
    }

}
