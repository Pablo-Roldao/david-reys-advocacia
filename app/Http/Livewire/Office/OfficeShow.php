<?php

namespace App\Http\Livewire\Office;

use Livewire\Component;

class OfficeShow extends Component
{

    public $office;
    public bool $showModal = false;

    protected $listeners = ['showModal' => 'showModal', 'closeModal' => 'closeModal'];

    public function showModal(): void
    {
        $this->resetErrorBag();
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.office.office-show');
    }
}
