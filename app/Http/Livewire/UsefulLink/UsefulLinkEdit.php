<?php

namespace App\Http\Livewire\UsefulLink;

use App\Repositories\EloquentUsefulLinkRepository;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class UsefulLinkEdit extends Component
{

    public $usefulLink;
    public bool $showModal = false;
    public $formId;

    protected array $rules = [
        'usefulLink.title' => 'required|min:3',
        'usefulLink.link' => 'required|min:3',
    ];

    protected $listeners = ['showModal' => 'showModal', 'closeModal' => 'closeModal'];

    public function mount(): void
    {
        $this->formId = $this->usefulLink->id;
    }

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

        EloquentUsefulLinkRepository::update($this->usefulLink->id, $this->usefulLink);

        $this->dispatchBrowserEvent('event', [
            'title' => 'Link útil atualizado com sucesso!',
            'icon' => 'success',
            'iconColor' => 'blue'
        ]);

        $this->reset();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.useful-link.useful-link-edit');
    }
}
