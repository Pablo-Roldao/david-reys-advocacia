<section>
    <button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled'>
        <img src="{{asset('storage/' . $image->getPhotoPath())}}" alt="Foto de apresentação"
             class="h-56 w-full object-contain rounded-lg"/>
    </button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>

        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <div>
                <img src="{{asset('storage/' . $image->getPhotoPath())}}" alt="Foto de apresentação"
                     class="h-96 mx-auto rounded-lg"/>
            </div>
        </x-slot>

        {{-- Footer --}}
        <x-slot name='footer'>

            <div class="flex gap-4">
                {{--Destroy button--}}
                <livewire:image-apresentation-desktop.image-apresentation-desktop-destroy :image="$image"
                                                                                          :wire:key="'destroy-image-apresentation-desktop-'.$image->getId()"/>

                {{-- Cancel button --}}
                <x-secondary-button wire:click="$emitSelf('closeModal')" wire:loading.attr="disabled">
                    Fechar
                </x-secondary-button>
            </div>

        </x-slot>
    </x-dialog-modal>
</section>
