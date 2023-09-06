<section>
    {{-- Destroy button --}}
    <x-button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled' class="bg-red-600">
        Excluir
    </x-button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>
            <div class="text-start">
                <h1 class="text-xl">Excluir serviço</h1>
            </div>
        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <div class="text-start">
                <p>Tem certeza que deseja excluir esse serviço?</p>
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
                <x-button wire:click="destroy" wire:loading.attr="disabled" class="bg-red-600">
                    Excluir
                </x-button>
            </div>

        </x-slot>
    </x-dialog-modal>

</section>
