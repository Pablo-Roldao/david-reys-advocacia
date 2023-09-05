<?php

namespace App\Http\Livewire\Post;

use App\Repositories\EloquentPostRepository;
use Livewire\Component;

class PostIndexPublic extends Component
{
    public int $perpage = 10;
    public string $search = '';
    public string $orderBy = 'name';
    public $orderAsc = true;


    public function render()
    {
        return view('livewire.post.post-index-public', [
            'posts' => EloquentPostRepository::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')->get()
        ]);
    }
}
