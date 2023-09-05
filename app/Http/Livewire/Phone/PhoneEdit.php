<?php

namespace App\Http\Livewire\Phone;

use App\Repositories\EloquentPhoneRepository;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class PhoneEdit extends Component
{
    public $phone;
    public bool $showModal = false;
    public $formId;

    protected array $rules = [
        'phone.phone' => 'required|min:15|max:15',
        'phone.name' => 'required|min:3',
        'phone.is_whatsapp' => 'required'
    ];

    protected $listeners = ['showModal' => 'showModal', 'closeModal' => 'closeModal'];

    public  function  mount(): void
    {
        $this->formId = $this->phone->id;
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

        EloquentPhoneRepository::update($this->phone->id, $this->phone);

        $this->dispatchBrowserEvent('phoneEdited', [
            'title' => 'Telefone/WhatsApp atualizado com sucesso!',
            'icon' => 'success',
            'iconColor' => 'blue'
        ]);

        $this->reset();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.phone.phone-edit');
    }
}
