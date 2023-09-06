<?php

namespace App\Models\Image;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_path'
    ];

    public function getId(): int
    {
        return $this->id;
    }

    public function getPhotoPath()
    {
        return $this->photo_path;
    }

}
