<?php

namespace App\Http\Livewire\Service;

use App\Repositories\EloquentServiceRepository;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ServiceDestroy extends Component
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

    public function destroy(): void
    {
        Storage::disk('public')->delete($this->service->getPhotoPath());
        EloquentServiceRepository::delete($this->service->id);

        $this->dispatchBrowserEvent('serviceDestroyed', [
            'title' => 'Serviço excluído com sucesso!',
            'icon' => 'success',
            'iconColor' => 'red'
        ]);

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.service.service-destroy');
    }
}
