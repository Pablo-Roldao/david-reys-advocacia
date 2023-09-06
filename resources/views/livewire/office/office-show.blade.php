<section>
    <button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled'
            class="bg-white rounded-lg p-6 h-full flex flex-col">
        @if($office->getPhotoPath() !== null)
            <img src="{{asset('storage/' . $office->getPhotoPath())}}" alt="Foto do membro do time"
                 class="h-56 w-full object-contain rounded-lg"/>
        @endif
        <span class="font-bold">{{$office->getName()}}</span>
        <span>{{$office->getAddress()}}</span>
    </button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>

        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <div>
                @if($office->getPhotoPath() !== null)
                    <img src="{{asset('storage/' . $office->getPhotoPath())}}" alt="Foto do membro do time"
                         class="h-96 mx-auto rounded-lg"/>
                @endif
                <span class="text-xl font-bold block">{{$office->getName()}}</span>
                <span class="block"><strong>Endereço:</strong> {{$office->getAddress()}}</span>
                <span class="block"><strong>Telefone:</strong>  {{$office->getPhone()}}</span>
                <span class="block">
                    <strong>Link do Maps:</strong>  <a href="{{$office->getMapLink()}}" target="_blank"
                       class="text-blue-700 hover:text-blue-900">{{$office->getMapLink()}}</a>
                </span>
            </div>
        </x-slot>

        {{-- Footer --}}
        <x-slot name='footer'>

            <div class="flex gap-4">
                {{--Destroy button--}}
                <livewire:office.office-destroy :office="$office" :wire:key="'destroy-office-'.$office->getId()"/>

                {{--Edit button--}}
                <livewire:office.office-edit :office="$office" :wire:key="'edit-office-'.$office->getId()"/>

                {{-- Cancel button --}}
                <x-secondary-button wire:click="$emitSelf('closeModal')" wire:loading.attr="disabled">
                    Fechar
                </x-secondary-button>
            </div>

        </x-slot>
    </x-dialog-modal>
</section>
