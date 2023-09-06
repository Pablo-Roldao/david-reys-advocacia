<?php

namespace App\Http\Livewire\Service;

use App\Repositories\EloquentServiceRepository;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServiceEdit extends Component
{

    use WithFileUploads;

    public $service;
    public $photo;
    public bool $showModal = false;
    public $formId;

    protected array $rules = [
        'service.title' => 'required|min:3',
        'service.content' => 'required|min:10',
        'photo' => 'image|nullable|max:2048'
    ];

    public function mount(): void
    {
        $this->formId = $this->service->getId();
    }

    protected $listeners = ['showModal' => 'showModal', 'closeModal' => 'closeModal'];

    /**
     * @throws ValidationException
     */
    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function showModal(): void
    {
        $this->resetErrorBag();
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
    }

    public function update(): void
    {
        $this->validate();

        if (!empty($this->photo)) {
            $this->service->photo_path = $this->photo->store('service-photos', 'public');
        } elseif (!empty($this->photo) && empty($this->service->getPhotoPath)) {
            $this->service->photo_path = 'service-photos/service.png';
        }

        EloquentServiceRepository::update($this->service->getId(), $this->service);

        $this->dispatchBrowserEvent('serviceEdited', [
            'title' => 'Serviço atualizado com sucesso!',
            'icon' => 'success',
            'iconColor' => 'blue'
        ]);

        $this->reset();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.service.service-edit');
    }
}
