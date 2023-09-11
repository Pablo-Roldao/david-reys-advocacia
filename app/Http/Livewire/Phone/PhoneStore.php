<?php

namespace App\Http\Livewire\Phone;

use App\Models\Phone;
use App\Repositories\EloquentPhoneRepository;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class PhoneStore extends Component
{
    public $phone;

    public bool $showModal = false;

    protected array $rules = [
        'phone.phone' => 'required|min:14|max:15|unique:phones,phone',
        'phone.name' => 'required|min:3',
        'phone.is_whatsapp' => 'required'
    ];

    public function mount(): void
    {
        $this->phone = new Phone();
        $this->phone->is_whatsapp = false;
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

        EloquentPhoneRepository::create($this->phone);


        $this->dispatchBrowserEvent('phoneStored', [
            'title' => 'Telefone/WhatsApp criado com sucesso!',
            'icon' => 'success',
            'iconColor' => 'green'
        ]);

        $this->reset();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.phone.phone-store');
    }
}
