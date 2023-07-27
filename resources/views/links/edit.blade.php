<x-app-layout>
    <x-layout>
        <div class="container m-5">
            <h1>Editar link: {{ $link->title }}</h1>
            <x-links.form action="{{ route('links.update', $link->id) }}" title="{{ $link->title }}"
                link="{{ $link->link }}" update={{ true }} />
        </div>
    </x-layout>
</x-app-layout>
