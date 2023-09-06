<?php

namespace App\Http\Livewire\TeamMember;

use Livewire\Component;

class TeamMemberShow extends Component
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

    public function render()
    {
        return view('livewire.team-member.team-member-show');
    }
}
