<?php

namespace App\Http\Livewire\Phone;

use App\Repositories\EloquentPhoneRepository;
use Livewire\Component;

class PhoneIndex extends Component
{
    public function render()
    {
        return view('livewire.phone.phone-index', [
            'phones' => EloquentPhoneRepository::getAll()
        ]);
    }
}
