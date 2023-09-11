<?php

namespace App\Http\Livewire\ImageApresentationMobile;

use App\Repositories\EloquentImageApresentationRepository;
use Livewire\Component;

class ImageApresentationMobileIndex extends Component
{
    public function render()
    {
        return view('livewire.image-apresentation-mobile.image-apresentation-mobile-index', [
            'images' => EloquentImageApresentationRepository::getAllMobile()
        ]);
    }
}
