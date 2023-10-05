<article>
    {{-- Create button --}}
    <x-button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled'
              class="w-full h-full flex justify-center">
        Criar
    </x-button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>
            <div class="text-start">
                <h1 class="text-xl">Criar link útil</h1>
            </div>
        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <div class="text-start">
                {{-- Form --}}
                <form wire:submit.prevent="store" id="store-form">
                    @csrf

                    <div class="mb-4">
                        <label for="title">Título</label>
                        <x-input wire:model="usefulLink.title" class="w-full"/>
                        <x-input-error for="usefulLink.title" />
                    </div>

                    <div class="mb-4">
                        <label for="link">Link</label>
                        <x-input wire:model="usefulLink.link" class="w-full"/>
                        <x-input-error for="usefulLink.link" />
                    </div>
                </form>
            </div>
        </x-slot>

        {{-- Footer --}}
        <x-slot name='footer'>

            <div class="flex gap-4">
                {{-- Cancel button --}}
                <x-secondary-button wire:click="$emitSelf('closeModal')" wire:loading.attr="disabled">
                    Cancelar
                </x-secondary-button>

                {{-- Submit button --}}
                <x-button wire:target="store" wire:loading.attr="disabled"
                          type="submit" form="store-form">
                    Criar
                </x-button>
            </div>

        </x-slot>
    </x-dialog-modal>

</article>
