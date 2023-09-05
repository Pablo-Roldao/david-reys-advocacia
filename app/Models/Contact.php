<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'whatsapp',
        'instagram_link',
        'facebook_link',
    ];

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getWhatsapp(): string
    {
        return $this->whatsapp;
    }

    public function getInstagramLink(): string
    {
        return $this->instagram_link;
    }

    public function getFacebookLink(): string
    {
        return $this->facebook_link;
    }

    public function getPreWrittenWhatsAppMessage(): string
    {
        return $this->pre_written_whatsapp_message;
    }

}
