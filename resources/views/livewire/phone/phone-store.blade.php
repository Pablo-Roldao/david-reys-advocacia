<section>
    {{-- Create button --}}
    <x-button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled'>
        Criar
    </x-button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>
            Criar telefone/WhatsApp
        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <section class="w-full p-4 mx-auto space-y-4 mt-4 rounded-xl">

                {{-- Form --}}
                <form wire:submit.prevent="store" id="storeForm">
                    @csrf

                    <div class="mb-4">
                        <x-label for="phone" value="Número"/>
                        <x-input label="Número" placeholder="Número"
                                 wire:model.debounce.500ms="phone.phone" name="phone" id="phone"
                                 autofocus
                                 class="w-full"/>
                        <x-input-error for="phone.phone"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="name" value="Nome"/>
                        <x-input label="Nome" placeholder="Nome"
                                 wire:model.debounce.500ms="phone.name" name="name" id="name"
                                 class="w-full"/>
                        <x-input-error for="phone.name"/>
                    </div>
                    <div>
                        <x-label for="is_whatsapp" value="WhatsApp"/>
                        <select label="WhatsApp" placeholder="WhatsApp"
                                wire:model="phone.is_whatsapp" name="is_whatsapp" id="is_whatsapp" class="w-full rounded shadow-sm border-gray-300">
                            <option label="Sim" value="1"></option>
                            <option label="Não" value="0"></option>
                        </select>
                        <x-input-error for="phone.is_whatsapp"/>
                    </div>

                </form>
            </section>
        </x-slot>

        {{-- Footer --}}
        <x-slot name='footer'>

            {{-- Cancel button --}}
            <x-secondary-button wire:click="$emitSelf('closeModal')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            {{-- Submit button --}}
            <x-button class="ml-4" wire:target="store" wire:loading.attr="disabled" type="submit"  form='storeForm'>
                {{ __('Create') }}
            </x-button>

        </x-slot>
    </x-dialog-modal>

</section>
