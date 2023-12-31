<?php

namespace App\Http\Livewire\Service;

use Livewire\Component;

class ServiceShow extends Component
{

    public $service;
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
        return view('livewire.service.service-show');
    }
}
