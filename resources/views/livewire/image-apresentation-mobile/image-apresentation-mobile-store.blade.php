<section>
    {{-- Create button --}}
    <x-button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled'
              class="w-full h-full flex justify-center">
        Criar
    </x-button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>
            <div class="text-start">
                <h1 class="text-xl">Criar imagem de apresentação</h1>
            </div>
        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <div class="text-start">
                {{-- Form --}}
                <form wire:submit.prevent="storeApresentationImageMobile" id="store-apresentation-image-mobile-form" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <x-label for="photo" value="Foto"/>
                        <input label="Foto" placeholder="Foto"
                               wire:model="photo" name="photo" id="photo"
                               class="w-full" type="file" accept="image/jpeg, image/png, image/jpg" />
                        <x-input-error for="photo"/>
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
                <x-button wire:target="storeApresentationImageMobile" wire:loading.attr="disabled"
                          type="submit" form="store-apresentation-image-mobile-form">
                    Criar
                </x-button>
            </div>

        </x-slot>
    </x-dialog-modal>

</section>
