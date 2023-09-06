<?php

namespace App\Repositories;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Collection;

class EloquentTeamMemberRepository
{
    public static function getAll(): Collection
    {
        return TeamMember::all();
    }

    public static function getById(int $id): TeamMember
    {
        return TeamMember::find($id);
    }

    public static function store(TeamMember $teamMember): void
    {
        $teamMember->save();
    }

    public static function update(int $id, TeamMember $newTeamMemberData): void
    {
        self::getById($id)->fill($newTeamMemberData->toArray())->save();
    }

    public static function delete(int $id): void
    {
        self::getById($id)->delete();
    }

    public static function search(string $search)
    {
        return empty($search)
            ? TeamMember::query()
            : TeamMember::query()
                ->where('name', 'like', '%' . $search . '%')
                ->orWhere('position', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
    }
}
