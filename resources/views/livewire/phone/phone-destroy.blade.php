<section>
    {{-- Delete button --}}
    <x-button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled'
              class="m-1 bg-red-600">
        Excluir
    </x-button>

    {{-- Modal --}}
    <x-dialog-modal wire:model.defer='showModal'>

        {{-- Title --}}
        <x-slot name='title'>
            <section class="text-left">
                Excluir telefone/WhatsApp
            </section>
        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <section class="text-left">
                Você tem certeza que quer excluir esse telefone/WhatsApp?
            </section>
        </x-slot>

        {{-- Footer --}}
        <x-slot name='footer'>
            {{-- Cancel button --}}
            <x-secondary-button wire:click="$emitSelf('closeModal')" wire:loading.attr="disabled" class="border-none">
                {{ __('Cancel') }}
            </x-secondary-button>

            {{-- Submit button --}}
            <x-button class="ml-4 bg-red-600 text-white border hover:text-black" wire:click="destroy"
                      wire:loading.attr="disabled" type="submit" selected>
                Excluir
            </x-button>
        </x-slot>

    </x-dialog-modal>
</section>
