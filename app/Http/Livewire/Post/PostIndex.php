<?php

namespace App\Http\Livewire\Post;

use App\Repositories\EloquentPostRepository;
use Livewire\Component;

class PostIndex extends Component
{

    public string $search = '';
    public $perpage = 10;
    public $orderBy = 'created_at';
    public $orderAsc = false;
    public function render()
    {
        return view('livewire.post.post-index', [
            'posts' => EloquentPostRepository::search($this->search)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')->paginate($this->perpage)
        ]);
    }
}
