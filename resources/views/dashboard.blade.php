<x-layout title="Início">
    <x-app-layout>
        <div class="container">
            <h1 class="text-center text-uppercase m-5 display-4">Painel administrativo</h1>
            <a href="{{ route('articles.index') }}">
                <button class="btn col-12 my-4">Artigos</button>
            </a>
            <a href="{{ route('links.index') }}">
                <button class="btn col-12 my-4">Links</button>
            </a>
        </div>
    </x-app-layout>
</x-layout>
