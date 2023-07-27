<x-app-layout>
    <x-layout title="Novo artigo">
        <div class="container m-5">
            <h1>Adicionar artigo</h1>
            <x-articles.form action="{{ route('articles.store') }}" title="{{ old('title') }}"
                update="{{ false }}" />
        </div>
    </x-layout>
</x-app-layout>
