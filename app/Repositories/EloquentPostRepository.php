<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class EloquentPostRepository
{

    public static function getAll(): Collection
    {
        return Post::all();
    }

    public static function getById(int $id): Post
    {
        return Post::find($id);
    }

    public static function store(Post $post): void
    {
        $post->save();
    }

    public static function update(int $id, Post $newPostData): void
    {
        self::getById($id)->fill($newPostData->toArray())->save();
    }

    public static function delete(int $id): void
    {
        self::getById($id)->delete();
    }

    public static function search(string $search)
    {
        return empty($search)
            ? Post::query()
            : Post::query()
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('content', 'like', '%' . $search . '%')
                ->orWhere('author', 'like', '%' . $search . '%');
    }

}
