<?php

namespace App\Http\Livewire\ImageApresentationMobile;

use Livewire\Component;

class ImageApresentationMobileShow extends Component
{

    public $image;
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
        return view('livewire.image-apresentation-mobile.image-apresentation-mobile-show');
    }
}
