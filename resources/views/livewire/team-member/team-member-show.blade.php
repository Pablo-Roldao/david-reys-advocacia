<section>
    <button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled' class="bg-white rounded-lg p-6 h-full flex flex-col">
        @if($teamMember->getPhotoPath() !== null)
            <img src="{{asset('storage/' . $teamMember->getPhotoPath())}}" alt="Foto do membro do time"
                 class="h-56 w-full object-cover rounded-lg"/>
        @endif
        <span class="font-bold">{{$teamMember->getName()}}</span>
        <span>{{$teamMember->getPosition()}}</span>
    </button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>

        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            <div class="text-center">
                @if($teamMember->getPhotoPath() !== null)
                    <img src="{{asset('storage/' . $teamMember->getPhotoPath())}}" alt="Foto do membro do time"
                         class="h-96 mx-auto rounded-lg"/>
                @endif
                <span class="text-xl font-bold block">{{$teamMember->getName()}}</span>
                <span class="block">{{$teamMember->getPosition()}}</span>
                <div class="whitespace-pre-line text-justify">
                    {{$teamMember->getDescription()}}
                </div>
            </div>
        </x-slot>

        {{-- Footer --}}
        <x-slot name='footer'>

            <div class="grid gap-4 w-full sm:flex">
                {{--Destroy button--}}
                <livewire:team-member.team-member-destroy :teamMember="$teamMember" :wire:key="'destroy-team-member-'.$teamMember->getId()"/>

                {{--Edit button--}}
                <livewire:team-member.team-member-edit :teamMember="$teamMember" :wire:key="'edit-teamMember-'.$teamMember->getId()"/>

                {{-- Cancel button --}}
                <x-secondary-button wire:click="$emitSelf('closeModal')" wire:loading.attr="disabled" class="w-full h-full flex justify-center">
                    Fechar
                </x-secondary-button>
            </div>

        </x-slot>
    </x-dialog-modal>
</section>
