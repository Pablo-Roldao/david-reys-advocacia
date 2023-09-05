<?php

namespace App\Http\Livewire\About;

use App\Repositories\EloquentAboutRepository;
use Livewire\Component;

class AboutIndex extends Component
{
    public function render()
    {
        return view('livewire.about.about-index', [
            'about' => EloquentAboutRepository::get()
        ]);
    }
}
