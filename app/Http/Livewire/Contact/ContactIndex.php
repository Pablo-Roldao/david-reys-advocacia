<?php

namespace App\Http\Livewire\Contact;

use App\Repositories\EloquentContactRepository;
use Livewire\Component;

class ContactIndex extends Component
{
    public function render()
    {
        return view('livewire.contact.contact-index', [
            'contact' => EloquentContactRepository::get()
        ]);
    }
}
