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
                <h1 class="text-xl">Criar escritório</h1>
            </div>
        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <div class="text-start">
                {{-- Form --}}
                <form wire:submit.prevent="store" id="store-form" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <x-label for="name" value="Nome"/>
                        <x-input label="Nome" placeholder="Nome"
                                 wire:model="office.name" name="name" id="name"
                                 autofocus
                                 class="w-full"/>
                        <x-input-error for="office.name"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="address" value="Endereço"/>
                        <x-input label="Endereço" placeholder="Endereço"
                                 wire:model="office.address" name="address" id="address"
                                 class="w-full"/>
                        <x-input-error for="office.address"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="phone" value="Telefone"/>
                        <x-input label="Telefone" placeholder="Telefone"
                                 wire:model="office.phone" name="phone" id="phone"
                                 class="w-full"/>
                        <x-input-error for="office.phone"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="map_link" value="Link do maps"/>
                        <x-input label="Link do maps" placeholder="Link do maps"
                                 wire:model="office.map_link" name="map_link" id="map_link"
                                 class="w-full"/>
                        <x-input-error for="office.map_link"/>
                    </div>
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
                <x-button wire:target="store" wire:loading.attr="disabled"
                          type="submit" form="store-form">
                    Criar
                </x-button>
            </div>

        </x-slot>
    </x-dialog-modal>

</section>
