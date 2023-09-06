<section>
    {{-- Edit button --}}
    <x-button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled'>
        Editar
    </x-button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>
            <div class="text-start">
                <h1 class="text-xl">Editar escritório</h1>
            </div>
        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <div class="text-start">
                {{-- Form --}}
                <form wire:submit.prevent="store" id="store-form" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <x-label for="title" value="Título"/>
                        <x-input label="Título" placeholder="Título"
                                 wire:model="service.title" title="title" id="title"
                                 autofocus
                                 class="w-full"/>
                        <x-input-error for="service.title"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="content" value="Conteúdo"/>
                        <textarea label="Conteúdo" placeholder="Conteúdo"
                                  wire:model="service.content" name="content" id="content"
                                  rows="10" class="w-full shadow-sm border-gray-300 rounded-lg"></textarea >
                        <x-input-error for="service.content"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="photo" value="Nova foto"/>
                        <input label="Nova foto" placeholder="Nova foto"
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
                <x-button wire:click="update" wire:loading.attr="disabled"
                          type="submit" form="edit-service-form-{{$formId}}">
                    Editar
                </x-button>
            </div>

        </x-slot>
    </x-dialog-modal>

</section>
