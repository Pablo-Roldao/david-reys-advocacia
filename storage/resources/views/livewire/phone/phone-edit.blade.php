<section>
    {{-- Edit button --}}
    <x-button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled'
              class="m-1">
        Editar
    </x-button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>
            <h1 class="text-start mb-4">Editar telefone/WhatsApp</h1>
        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <div class="text-start">
                {{-- Form --}}
                <form wire:submit.prevent="update" id="edit-phone-form-{{$formId}}">
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
                            <option label="Sim" value="{{true}}"></option>
                            <option label="Não" value="0"></option>
                        </select>
                        <x-input-error for="phone.is_whatsapp"/>
                    </div>
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
                      type="submit" form="edit-phone-form-{{$formId}}">
                Editar
            </x-button>

        </x-slot>
    </x-dialog-modal>

</section>
