<?php

namespace App\Http\Livewire\TeamMember;

use App\Repositories\EloquentTeamMemberRepository;
use Livewire\Component;

class TeamMemberIndex extends Component
{

    public string $search = '';
    public $perpage = 6;
    public $orderBy = 'name';
    public $orderAsc = true;

    public function render()
    {
        return view('livewire.team-member.team-member-index', [
            'teamMembers' => EloquentTeamMemberRepository::search($this->search)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')->paginate($this->perpage)
        ]);
    }
}
