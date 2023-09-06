<?php

namespace App\Http\Livewire\ImageAbout;

use App\Repositories\EloquentImageAboutRespository;
use Livewire\Component;

class ImageAboutIndex extends Component
{
    public function render()
    {
        return view('livewire.image-about.image-about-index', [
            'imageAbout' => EloquentImageAboutRespository::get()
        ]);
    }
}
