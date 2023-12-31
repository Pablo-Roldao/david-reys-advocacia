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
                <h1 class="text-xl">Criar post</h1>
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
                                 wire:model="post.title" name="title" id="title"
                                 autofocus
                                 class="w-full"/>
                        <x-input-error for="post.title"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="author" value="Autor"/>
                        <x-input label="Autor" placeholder="Autor"
                                 wire:model="post.author" name="author" id="author"
                                 class="w-full"/>
                        <x-input-error for="post.author"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="cover" value="Capa"/>
                        <input label="Capa" placeholder="Capa"
                                 wire:model="cover" name="cover" id="cover"
                                 class="w-full" type="file" accept="image/jpeg, image/png, image/jpg" />
                        <x-input-error for="cover"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="content" value="Conteúdo"/>
                        <textarea label="Conteúdo" placeholder="Conteúdo"
                                  wire:model="post.content" name="content" id="content"
                                  rows="50" class="w-full shadow-sm border-gray-300 rounded-lg"></textarea >
                        <x-input-error for="post.content"/>
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
                    Editar
                </x-button>
            </div>

        </x-slot>
    </x-dialog-modal>

</section>
