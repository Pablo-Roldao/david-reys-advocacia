<section>
    {{-- Edit button --}}
    <x-button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled'>
        Editar
    </x-button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>
            <div class="text-start">
                <h1 class="text-xl">Editar membro do time</h1>
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
                                 wire:model="teamMember.name" name="name" id="name"
                                 autofocus
                                 class="w-full"/>
                        <x-input-error for="teamMember.name"/>
                    </div>
                    <div class="mb-4">
                        @php
                            $positionEnum = \App\Enum\PositionEnum::class;
                        @endphp
                        <x-label for="position" value="Cargo"/>
                        <select label="Cargo" placeholder="Cargo"
                                wire:model="teamMember.position" name="position" id="position"
                                class="w-full rounded shadow-sm border-gray-300">
                            <option label="Advogado(a)" value="{{$positionEnum::LAWYER}}"></option>
                            <option label="Supervisor(a)" value="{{$positionEnum::SUPERVISOR}}"></option>
                            <option label="Assistente jurídico(a)"
                                    value="{{$positionEnum::LEGAL_ASSISTANT}}"></option>
                            <option label="Estagiário(a) de direito"
                                    value="{{$positionEnum::LAW_INTERNSHIP}}"></option>
                            <option label="Assistent administrativo(a)"
                                    value="{{$positionEnum::ADMINISTRATIVE_ASSISTANT}}"></option>
                            <option label="Motorista" value="{{$positionEnum::DRIVER}}"></option>
                        </select>
                        <x-input-error for="teamMember.position"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="photo" value="Foto"/>
                        <input label="Foto" placeholder="Foto"
                               wire:model="photo" name="photo" id="photo"
                               class="w-full" type="file" accept="image/jpeg, image/png, image/jpg" />
                        <x-input-error for="photo"/>
                    </div>
                    <div class="mb-4">
                        <x-label for="description" value="Descrição"/>
                        <textarea label="Descrição" placeholder="Descrição"
                                  wire:model="teamMember.description" name="description" id="description"
                                  rows="10" class="w-full shadow-sm border-gray-300 rounded-lg"></textarea >
                        <x-input-error for="teamMember.description"/>
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
                          type="submit" form="edit-post-form-{{$formId}}">
                    Editar
                </x-button>
            </div>

        </x-slot>
    </x-dialog-modal>

</section>
