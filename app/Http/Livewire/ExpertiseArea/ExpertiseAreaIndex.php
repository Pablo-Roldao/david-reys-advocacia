<?php

namespace App\Http\Livewire\ExpertiseArea;

use App\Repositories\EloquentExpertiseAreaRepository;
use Livewire\Component;

class ExpertiseAreaIndex extends Component
{
    public function render()
    {
        return view('livewire.expertise-area.expertise-area-index', [
            'expertiseArea' => EloquentExpertiseAreaRepository::get()
        ]);
    }
}
