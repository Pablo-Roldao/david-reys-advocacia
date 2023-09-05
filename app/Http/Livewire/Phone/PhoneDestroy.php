<?php

namespace App\Http\Livewire\Phone;

use App\Repositories\EloquentPhoneRepository;
use Livewire\Component;

class PhoneDestroy extends Component
{
    public $phone;
    public $showModal = false;

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
        EloquentPhoneRepository::delete($this->phone->id);

        $this->dispatchBrowserEvent('phoneDestroyed', [
            'title' => 'Telefone/WhatsApp excluído com sucesso!',
            'icon' => 'success',
            'iconColor' => 'red'
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.phone.phone-destroy');
    }
}
