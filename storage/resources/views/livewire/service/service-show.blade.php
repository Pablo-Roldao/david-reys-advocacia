<section>
    <button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled'
            class="bg-white rounded-lg p-6 h-full flex flex-col">
        @if($service->getPhotoPath() !== null)
            <img src="{{asset('storage/' . $service->getPhotoPath())}}" alt="Foto do membro do time"
                 class="h-56 w-full object-contain rounded-lg bg-blue-900 p-3"/>
        @endif
        <span class="font-bold">{{$service->getTitle()}}</span>
    </button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>

        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <div>
                @if($service->getPhotoPath() !== null)
                    <img src="{{asset('storage/' . $service->getPhotoPath())}}" alt="Foto do membro do time"
                         class="h-96 mx-auto rounded-lg  bg-blue-900 p-3"/>
                @endif
                <h2 class="mt-2 text-center">{{$service->getTitle()}}</h2>
                <div class="whitespace-pre-line text-justify">
                    {{$service->getContent()}}
                </div>
        </x-slot>

        {{-- Footer --}}
        <x-slot name='footer'>

            <div class="flex gap-4">
                {{--Destroy button--}}
                <livewire:service.service-destroy :service="$service" :wire:key="'destroy-service-'.$service->getId()"/>

                {{--Edit button--}}
                <livewire:service.service-edit :service="$service" :wire:key="'edit-service-'.$service->getId()"/>

                {{-- Cancel button --}}
                <x-secondary-button wire:click="$emitSelf('closeModal')" wire:loading.attr="disabled">
                    Fechar
                </x-secondary-button>
            </div>

        </x-slot>
    </x-dialog-modal>
</section>
