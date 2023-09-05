<section>
    {{-- Edit button --}}
    <x-button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled'>
        Editar
    </x-button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>
            <h1 class="text-start mb-4 text-2xl">Editar área de atuação</h1>
        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <div class="text-start">
                {{-- Form --}}
                <form wire:submit.prevent="update" id="edit-about-form">
                    @csrf

                    <section>
                        <div class="mb-4">
                            <x-label for="content" value="Conteúdo"/>
                            <textarea placeholder="Conteúdo"
                                      wire:model.debounce.500ms="expertiseArea.content"
                                      name="content" id="content"
                                      rows="10"
                                      class="w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"></textarea>

                            <x-input-error for="expertiseArea.content"/>
                        </div>
                    </section>

                </form>
            </div>
        </x-slot>

        {{-- Footer --}}
        <x-slot name='footer'>

            {{-- Cancel button --}}
            <x-secondary-button wire:click="$emitSelf('closeModal')" wire:loading.attr="disabled">
                Cancelar
            </x-secondary-button>

            {{-- Submit button --}}
            <x-button class="ml-4 bg-blue-600 dark:bg-blue-600" wire:target="update" wire:loading.attr="disabled"
                      type="submit" form="edit-about-form">
                Editar
            </x-button>

        </x-slot>
    </x-dialog-modal>

</section>
