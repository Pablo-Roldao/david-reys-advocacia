<?php

namespace App\Http\Livewire\UsefulLink;

use App\Repositories\EloquentUsefulLinkRepository;
use Livewire\Component;

class UsefulLinkDestroy extends Component
{

    public $usefulLink;
    public bool $showModal = false;

    protected $listeners = ['showModal' => 'showModal', 'closeModal' => 'closeModal'];

    public function showModal(): void
    {
        $this->resetErrorBag();
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
    }

    public function destroy(): void
    {
        EloquentUsefulLinkRepository::delete($this->usefulLink->id);

        $this->dispatchBrowserEvent('event', [
            'title' => 'Link útil excluído com sucesso!',
            'icon' => 'success',
            'iconColor' => 'red'
        ]);

        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.useful-link.useful-link-destroy');
    }
}
