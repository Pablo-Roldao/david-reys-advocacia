<?php

namespace App\Http\Livewire\TeamMember;

use App\Repositories\EloquentTeamMemberRepository;
use Livewire\Component;

class TeamMemberDestroy extends Component
{

    public $teamMember;
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
        EloquentTeamMemberRepository::delete($this->teamMember->id);

        $this->dispatchBrowserEvent('teamMemberDestroyed', [
            'title' => 'Membro do time excluído com sucesso!',
            'icon' => 'success',
            'iconColor' => 'red'
        ]);

        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.team-member.team-member-destroy');
    }
}
