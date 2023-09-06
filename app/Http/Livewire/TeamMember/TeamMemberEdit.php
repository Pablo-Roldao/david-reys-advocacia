<?php

namespace App\Http\Livewire\TeamMember;

use App\Models\TeamMember;
use App\Repositories\EloquentTeamMemberRepository;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class TeamMemberEdit extends Component
{
    use WithFileUploads;

    public $teamMember;
    public $photo;
    public bool $showModal = false;
    public $formId;

    protected array $rules = [
        'teamMember.name' => 'required|min:3',
        'teamMember.position' => 'required|min:3',
        'teamMember.description' => 'required|min:20',
        'photo' => 'image|nullable'
    ];

    public function mount(): void
    {
        $this->formId = $this->teamMember->getId();
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

    public function update(): void
    {
        $this->validate();

        if (!empty($this->photo)) {
            $this->teamMember->photo_path = $this->photo->store('team-member-photos', 'public');
        } elseif (!empty($this->photo) && empty($this->teamMember->getPhotoPath)) {
            $this->teamMember->photo_path = 'team-member-photos/team-member.png';
        }

        EloquentTeamMemberRepository::update($this->teamMember->getId(), $this->teamMember);

        $this->dispatchBrowserEvent('teamMemberEdited', [
            'title' => 'Membro do time atualizado com sucesso!',
            'icon' => 'success',
            'iconColor' => 'blue'
        ]);

        $this->reset();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.team-member.team-member-edit');
    }
}
