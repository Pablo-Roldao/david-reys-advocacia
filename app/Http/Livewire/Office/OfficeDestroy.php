<?php

namespace App\Http\Livewire\Office;

use App\Repositories\EloquentOfficeRepository;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class OfficeDestroy extends Component
{

    public $office;
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
        Storage::disk('public')->delete($this->office->getPhotoPath());

        EloquentOfficeRepository::delete($this->office->id);

        $this->dispatchBrowserEvent('officeDestroyed', [
            'title' => 'Escritório excluído com sucesso!',
            'icon' => 'success',
            'iconColor' => 'red'
        ]);

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.office.office-destroy');
    }
}
