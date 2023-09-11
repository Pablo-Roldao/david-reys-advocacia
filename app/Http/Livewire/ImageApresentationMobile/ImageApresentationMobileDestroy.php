<?php

namespace App\Http\Livewire\ImageApresentationMobile;

use App\Repositories\EloquentImageApresentationRepository;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ImageApresentationMobileDestroy extends Component
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

    public function destroy(): void
    {

        Storage::disk('public')->delete($this->image->getPhotoPath());

        EloquentImageApresentationRepository::delete($this->image->id);

        $this->closeModal();
        redirect()->route('admin.images');
    }
    public function render()
    {
        return view('livewire.image-apresentation-mobile.image-apresentation-mobile-destroy');
    }
}
