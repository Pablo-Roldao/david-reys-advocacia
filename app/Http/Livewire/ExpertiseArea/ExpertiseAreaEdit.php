<?php

namespace App\Http\Livewire\ExpertiseArea;

use App\Repositories\EloquentAboutRepository;
use App\Repositories\EloquentExpertiseAreaRepository;
use Livewire\Component;

class ExpertiseAreaEdit extends Component
{
    public $expertiseArea;
    public bool $showModal = false;

    protected array $rules = [
        'expertiseArea.content' => 'required|min:10'
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

        EloquentExpertiseAreaRepository::update($this->expertiseArea);

        $this->dispatchBrowserEvent('expertiseAreaEdited', [
            'title' => 'Área de atuação atualizada com sucesso!',
            'icon' => 'success',
            'iconColor' => 'blue'
        ]);

        $this->reset();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.expertise-area.expertise-area-edit');
    }
}
