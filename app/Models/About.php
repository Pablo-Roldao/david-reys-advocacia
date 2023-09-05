<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_title',
        'title',
        'home_content',
        'content',
    ];

    public function getHomeTitle(): string
    {
        return $this->home_title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getHomeContent(): string
    {
        return $this->home_content;
    }

    public function getContent(): string
    {
        return $this->content;
    }

}
