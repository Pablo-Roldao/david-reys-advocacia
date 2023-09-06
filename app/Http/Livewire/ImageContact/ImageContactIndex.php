<?php

namespace App\Http\Livewire\ImageContact;

use App\Repositories\EloquentImageContactRepository;
use Livewire\Component;

class ImageContactIndex extends Component
{

    public function render()
    {
        return view('livewire.image-contact.image-contact-index', [
            'imageContact' => EloquentImageContactRepository::get()
        ]);
    }
}
