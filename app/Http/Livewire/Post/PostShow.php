<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class PostShow extends Component
{

    public $post;
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
        return view('livewire.post.post-show');
    }
}
