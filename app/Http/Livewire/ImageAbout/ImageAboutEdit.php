<?php

namespace App\Http\Livewire\ImageAbout;

use App\Repositories\EloquentImageAboutRespository;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageAboutEdit extends Component
{

    use WithFileUploads;

    public $imageAbout;
    public $photo;
    public bool $showModal = false;
    public $formId;

    protected array $rules = [
        'photo' => 'image|max:2048'
    ];

    public function mount(): void
    {
        $this->formId = $this->imageAbout->getId();
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
            $this->imageAbout->photo_path = $this->photo->store('image-about', 'public');
        } elseif (!empty($this->photo) && empty($this->imageAbout->getPhotoPath)) {
            $this->imageAbout->photo_path = 'image-about/about.png';
        }

        EloquentImageAboutRespository::update($this->imageAbout);

        /*$this->dispatchBrowserEvent('imageAboutEdited', [
            'title' => 'Imagem do sobre atualizada com sucesso!',
            'icon' => 'success',
            'iconColor' => 'blue'
        ]);*/

        $this->reset();
        $this->closeModal();
        redirect()->route('admin.images');
    }
    public function render()
    {
        return view('livewire.image-about.image-about-edit');
    }
}
