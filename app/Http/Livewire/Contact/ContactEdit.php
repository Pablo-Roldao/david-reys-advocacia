<?php

namespace App\Http\Livewire\Contact;

use App\Repositories\EloquentContactRepository;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class ContactEdit extends Component
{

    public $contact;
    public bool $showModal = false;

    protected array $rules = [
        'contact.email' => 'required|email|min:3',
        'contact.whatsapp' => 'required|min_digits:11|max_digits:11|numeric',
        'contact.pre_written_whatsapp_message' => 'required|min:10',
        'contact.instagram_link' => 'required|min:3',
        'contact.facebook_link' => 'required|min:10'
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

        EloquentContactRepository::update($this->contact);

        $this->dispatchBrowserEvent('contactEdited', [
            'title' => 'Contato atualizado com sucesso!',
            'icon' => 'success',
            'iconColor' => 'blue'
        ]);

        $this->reset();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.contact.contact-edit');
    }
}
