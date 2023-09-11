<?php

namespace App\Http\Livewire\Post;

use App\Repositories\EloquentPostRepository;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class PostDestroy extends Component
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

    public function destroy(): void
    {
        Storage::disk('public')->delete($this->service->getCoverPath());

        EloquentPostRepository::delete($this->post->id);

        $this->dispatchBrowserEvent('postDestroyed', [
            'title' => 'Post excluído com sucesso!',
            'icon' => 'success',
            'iconColor' => 'red'
        ]);

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.post.post-destroy');
    }
}
