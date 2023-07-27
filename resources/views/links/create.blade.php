<x-app-layout>
    <x-layout title="Novo link">
        <div class="container m-5">
            <h1>Adicionar link</h1>
            <x-links.form action="{{ route('links.store') }}" title="{{ old('title') }}"
                update="{{ false }}" />
        </div>
    </x-layout>
</x-app-layout>
