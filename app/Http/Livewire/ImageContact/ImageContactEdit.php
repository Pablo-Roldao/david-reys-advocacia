<?php

namespace App\Http\Livewire\ImageContact;

use App\Repositories\EloquentImageContactRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageContactEdit extends Component
{

    use WithFileUploads;

    public $imageContact;
    public $photo;
    public bool $showModal = false;
    public $formId;

    protected array $rules = [
        'photo' => 'image|max:2048'
    ];

    public function mount(): void
    {
        $this->formId = $this->imageContact->getId();
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

        Storage::disk('public')->delete($this->imageContact->getPhotoPath());
        $this->imageContact->photo_path = $this->photo->store('image-contact', 'public');

        EloquentImageContactRepository::update($this->imageContact);

        $this->reset();
        $this->closeModal();
        redirect()->route('admin.images');
    }

    public function render()
    {
        return view('livewire.image-contact.image-contact-edit');
    }
}
