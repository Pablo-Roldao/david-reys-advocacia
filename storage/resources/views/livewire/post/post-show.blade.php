<section>
    <button wire:click="$emitSelf('showModal')" wire:loading.attr='disabled'>
        {{$post->getTitle()}}
    </button>

    <x-dialog-modal wire:model.defer='showModal'>
        {{-- Title --}}
        <x-slot name='title'>
            <h1>{{$post->getTitle()}}</h1>
            <div class="flex justify-between">
                <span>{{$post->getAuthor()}}</span>
                <span>{{$post->getFormattedCreationDate()}}</span>
            </div>
        </x-slot>

        {{-- Content --}}
        <x-slot name='content'>
            @if($post->getCoverPath() !== null)
                <img src="{{asset('storage/' . $post->getCoverPath())}}" alt="Capa do post"
                     class="h-56 w-full object-cover rounded-lg"/>
            @endif
            <div class="whitespace-pre-line text-justify">
                {{$post->getContent()}}
            </div>
        </x-slot>

        {{-- Footer --}}
        <x-slot name='footer'>

            <div class="flex gap-4">
                {{--Destroy button--}}
                <livewire:post.post-destroy :post="$post" :wire:key="'destroy-post-'.$post->id"/>

                {{--Edit button--}}
                <livewire:post.post-edit :post="$post" :wire:key="'edit-post-'.$post->id"/>

                {{-- Cancel button --}}
                <x-secondary-button wire:click="$emitSelf('closeModal')" wire:loading.attr="disabled">
                    Fechar
                </x-secondary-button>
            </div>

        </x-slot>
    </x-dialog-modal>
</section>
