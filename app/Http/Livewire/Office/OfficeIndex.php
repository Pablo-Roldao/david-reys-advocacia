<?php

namespace App\Http\Livewire\Office;

use App\Repositories\EloquentOfficeRepository;
use Livewire\Component;

class OfficeIndex extends Component
{

    public string $search = '';
    public $perpage = 8;
    public $orderBy = 'name';
    public $orderAsc = true;

    public function render()
    {
        return view('livewire.office.office-index', [
            'offices' => EloquentOfficeRepository::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')->paginate($this->perpage)
        ]);
    }
}
