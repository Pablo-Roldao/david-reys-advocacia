<?php

namespace App\Http\Livewire\UsefulLink;

use App\Models\UsefulLink;
use Livewire\Component;

class UsefulLinkIndex extends Component
{
    public function render()
    {
        return view('livewire.useful-link.useful-link-index', [
            'usefulLinks' => UsefulLink::all()
        ]);
    }
}
