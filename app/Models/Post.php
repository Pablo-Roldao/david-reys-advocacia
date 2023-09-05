<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author',
        'cover_path'
    ];

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getFormattedCreationDate(): string
    {
        $formattedDate = Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at);

        return $formattedDate->format('d/m/Y');
    }

    public function getCoverPath()
    {
        return $this->cover_path;
    }

}
