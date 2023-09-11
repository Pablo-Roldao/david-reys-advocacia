<?php

namespace App\Http\Livewire\Office;

use App\Repositories\EloquentOfficeRepository;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class OfficeEdit extends Component
{

    use WithFileUploads;

    public $office;
    public $photoOffice;
    public bool $showModal = false;
    public $formId;

    protected array $rules = [
        'office.name' => 'required|min:3',
        'office.address' => 'required|min:3',
        'office.map_link' => 'required|min:3',
        'office.phone' => 'required|min:14|max:15',
        'photoOffice' => 'image|max:2048'
    ];

    public function mount(): void
    {
        $this->formId = $this->office->getId();
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

        if (!empty($this->photoOffice)) {
            $this->office->photo_path = $this->photoOffice->store('office-photos', 'public');
        }
        $this->office->photo_path = $this->photoOffice->store('office-photos', 'public');


        EloquentOfficeRepository::update($this->office->getId(), $this->office);

        $this->dispatchBrowserEvent('officeEdited', [
            'title' => 'Escritório atualizado com sucesso!',
            'icon' => 'success',
            'iconColor' => 'blue'
        ]);

        $this->reset();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.office.office-edit');
    }
}
