<?php

namespace App\Http\Livewire\ImageApresentationMobile;

use App\Enum\ImageTypesEnum;
use App\Models\Image\ImageApresentation;
use App\Repositories\EloquentImageApresentationRepository;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageApresentationMobileStore extends Component
{

    use WithFileUploads;

    public $image;
    public $photo;
    public bool $showModal = false;

    protected array $rules = [
        'photo' => 'required|image|max:2048'
    ];

    public function mount(): void
    {
        $this->image = new ImageApresentation();
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

    public function storeApresentationImageMobile(): void
    {
        $this->validate();

        $this->image->photo_path = $this->photo->store('image-apresentation', 'public');
        $this->image->type = ImageTypesEnum::MOBILE;

        EloquentImageApresentationRepository::store($this->image);

        $this->reset();
        $this->closeModal();
        redirect()->route('admin.images');
    }

    public function render()
    {
        return view('livewire.image-apresentation-mobile.image-apresentation-mobile-store');
    }
}
