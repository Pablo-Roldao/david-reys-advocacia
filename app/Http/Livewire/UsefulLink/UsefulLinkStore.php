<?php

namespace App\Http\Livewire\UsefulLink;

use App\Models\UsefulLink;
use App\Repositories\EloquentUsefulLinkRepository;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class UsefulLinkStore extends Component
{

    public $usefulLink;
    public bool $showModal = false;

    protected array $rules = [
        'usefulLink.title' => 'required|min:3',
        'usefulLink.link' => 'required|min:3',
    ];

    public function mount(): void
    {
        $this->usefulLink = new UsefulLink();
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

        EloquentUsefulLinkRepository::store($this->usefulLink);

        $this->dispatchBrowserEvent('event', [
            'title' => 'Link útil criado com sucesso!',
            'icon' => 'success',
            'iconColor' => 'green'
        ]);

        $this->reset();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.useful-link.useful-link-store');
    }
}
