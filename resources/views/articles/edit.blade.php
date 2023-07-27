<x-app-layout>
    <x-layout>
        <div class="container m-5">
            <h1>Editar artigo: {{ $article->title }}</h1>
            <x-articles.form action="{{ route('articles.update', $article->id) }}" title="{{ $article->title }}"
                link="{{ $article->link }}" update={{ true }} />
        </div>
    </x-layout>
</x-app-layout>
