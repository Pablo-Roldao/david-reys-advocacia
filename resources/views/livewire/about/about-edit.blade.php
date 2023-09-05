<section>
    {{-- Edit button --}}
    <x-button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled'>
        Editar
    </x-button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>
            <h1 class="text-start mb-4 text-2xl">Editar sobre</h1>
        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <div class="text-start">
                {{-- Form --}}
                <form wire:submit.prevent="update" id="edit-about-form">
                    @csrf

                    <section>
                        <h3 class="text-xl">Prévia</h3>
                        <div class="mb-2">
                            <x-label for="home_title" value="Título da home"/>
                            <x-input label="Título da home" placeholder="Título da home"
                                     wire:model.debounce.500ms="about.home_title" name="home_title" id="home_title"
                                     autofocus
                                     class="w-full"/>
                            <x-input-error for="about.home_title"/>
                        </div>
                        <div class="mb-4">
                            <x-label for="home_content" value="Conteúdo da home"/>
                            <textarea placeholder="Conteúdo"
                                      wire:model.debounce.500ms="about.home_content"
                                      name="home_content" id="home_content"
                                      rows="10"
                                      class="w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"></textarea>

                            <x-input-error for="about.home_content"/>
                        </div>
                    </section>

                    <section>
                        <h3 class="text-xl">Completo</h3>
                        <div class="mb-2">
                            <x-label for="title" value="Título"/>
                            <x-input label="Título" placeholder="Título"
                                     wire:model.debounce.500ms="about.title" name="title" id="title"
                                     class="w-full"/>
                            <x-input-error for="about.title"/>
                        </div>
                        <div class="mb-4">
                            <x-label for="content" value="Conteúdo"/>
                            <textarea placeholder="Conteúdo"
                                     wire:model.debounce.500ms="about.content"
                                      name="content" id="content"
                                      rows="10"
                                      class="w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"></textarea>
                            <x-input-error for="about.content"/>
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
