<?php

namespace App\Http\Livewire\Office;

use App\Models\Office;
use App\Repositories\EloquentOfficeRepository;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class OfficeStore extends Component
{
    use WithFileUploads;

    public $office;
    public $photo;
    public bool $showModal = false;

    protected array $rules = [
        'office.name' => 'required|min:3',
        'office.address' => 'required|min:3',
        'office.map_link' => 'required|min:3',
        'office.phone' => 'required|min:14|max:15',
        'photo' => 'image|max:2048'
    ];

    public function mount(): void
    {
        $this->office = new Office();
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

    public function store(): void
    {
        $this->validate();

        $this->office->photo_path = $this->photo->store('office-photos', 'public');

        EloquentOfficeRepository::store($this->office);

        $this->dispatchBrowserEvent('officeStored', [
            'title' => 'Escritório criado com sucesso!',
            'icon' => 'success',
            'iconColor' => 'blue'
        ]);

        $this->reset();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.office.office-store');
    }
}
