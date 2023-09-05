<?php

namespace App\Http\Livewire\About;

use App\Repositories\EloquentAboutRepository;
use Livewire\Component;

class AboutEdit extends Component
{
    public $about;
    public bool $showModal = false;

    protected array $rules = [
        'about.home_title' => 'required|min:3',
        'about.home_content' => 'required|min: 10',
        'about.title' => 'required|min:3',
        'about.content' => 'required|min:10'
    ];

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

        EloquentAboutRepository::update($this->about);

        $this->dispatchBrowserEvent('aboutEdited', [
            'title' => 'Sobre atualizado com sucesso!',
            'icon' => 'success',
            'iconColor' => 'blue'
        ]);

        $this->reset();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.about.about-edit');
    }
}
