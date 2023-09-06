<?php

namespace App\Http\Livewire\Service;

use App\Repositories\EloquentServiceRepository;
use Livewire\Component;

class ServiceIndex extends Component
{

    public string $search = '';
    public $perpage = 6;
    public $orderBy = 'title';
    public $orderAsc = true;

    public function render()
    {
        return view('livewire.service.service-index', [
            'services' => EloquentServiceRepository::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')->paginate($this->perpage)
        ]);
    }
}
