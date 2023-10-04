<?php

namespace App\Http\Livewire\TeamMember;

use App\Models\TeamMember;
use App\Repositories\EloquentTeamMemberRepository;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class TeamMemberStore extends Component
{

    use WithFileUploads;

    public $teamMember;
    public $photo;
    public bool $showModal = false;

    protected array $rules = [
        'teamMember.name' => 'required|min:3',
        'teamMember.position' => 'required|min:3',
        'teamMember.description' => 'required|min:20',
        'photo' => 'image|nullable'
    ];

    public function mount(): void
    {
        $this->teamMember = new TeamMember();
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

        if (!empty($this->photo)) {
            $this->teamMember->photo_path =  $this->photo->store('team-member-photos', 'public');
        } else {
            $this->teamMember->photo_path = 'team-member-photos/team-member.png';
        }

        EloquentTeamMemberRepository::store($this->teamMember);

        $this->dispatchBrowserEvent('teamMemberStored', [
            'title' => 'Membro do time criado com sucesso!',
            'icon' => 'success',
            'iconColor' => 'blue'
        ]);

        $this->reset();
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.team-member.team-member-store');
    }
}
