<?php

namespace App\Http\Livewire\ImageApresentationDesktop;

use App\Repositories\EloquentImageApresentationRepository;
use Livewire\Component;

class ImageApresentationDesktopIndex extends Component
{
    public function render()
    {
        return view('livewire.image-apresentation-desktop.image-apresentation-desktop-index', [
            'images' => EloquentImageApresentationRepository::getAllDesktop()
        ]);
    }
}
