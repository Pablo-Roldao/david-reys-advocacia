<?php

namespace App\Http\Livewire\Post;

use App\Repositories\EloquentPostRepository;
use Livewire\Component;

class PostIndexPublic extends Component
{
    public int $perpage = 3;
    public $search = '';
    public string $orderBy = 'created_at';
    public $orderAsc = false;


    public function render()
    {
        return view('livewire.post.post-index-public', [
            'posts' => EloquentPostRepository::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')->paginate($this->perpage)
        ]);
    }
}
