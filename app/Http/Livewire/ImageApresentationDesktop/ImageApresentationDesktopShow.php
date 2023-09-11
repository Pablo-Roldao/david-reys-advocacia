<?php

namespace App\Http\Livewire\ImageApresentationDesktop;

use Livewire\Component;

class ImageApresentationDesktopShow extends Component
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
        return view('livewire.image-apresentation-desktop.image-apresentation-desktop-show');
    }
}
