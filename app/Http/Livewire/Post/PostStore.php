<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use App\Repositories\EloquentPostRepository;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostStore extends Component
{
    use WithFileUploads;

    public $post;
    public $cover;
    public bool $showModal = false;

    protected array $rules = [
        'post.title' => 'required|min:3',
        'post.author' => 'required|min:3',
        'post.content' => 'required|min:20',
        'cover' => 'image'
    ];

    public function mount(): void
    {
        $this->post = new Post();
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

        $this->post->cover_path =  $this->cover->store('post-covers', 'public');

        EloquentPostRepository::store($this->post);

        $this->dispatchBrowserEvent('postStored', [
            'title' => 'Post guardado com sucesso!',
            'icon' => 'success',
            'iconColor' => 'blue'
        ]);

        $this->reset();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.post.post-store');
    }
}
