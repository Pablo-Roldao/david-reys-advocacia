<?php

namespace App\Http\Livewire\Post;

use App\Repositories\EloquentPostRepository;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostEdit extends Component
{

    use WithFileUploads;

    public $post;
    public bool $showModal = false;
    public $cover;
    public $formId;

    protected array $rules = [
        'post.title' => 'required|min:3',
        'post.author' => 'required|min:3',
        'post.content' => 'required|min:20',
        'cover' => 'image'
    ];

    protected $listeners = ['showModal' => 'showModal', 'closeModal' => 'closeModal'];

    public function mount(): void
    {
        $this->formId = $this->post->id;
    }

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

        if (!empty($this->cover)) {
            $this->post->cover_path = $this->cover->store('post-covers', 'public');
        }

        EloquentPostRepository::update($this->post->id, $this->post);

        $this->dispatchBrowserEvent('postEdited', [
            'title' => 'Post atualizado com sucesso!',
            'icon' => 'success',
            'iconColor' => 'blue'
        ]);

        $this->reset();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.post.post-edit');
    }
}
