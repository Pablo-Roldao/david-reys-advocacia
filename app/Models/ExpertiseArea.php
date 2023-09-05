<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertiseArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'content'
    ];

    public function getContent(): string
    {
        return $this->content;
    }

}
