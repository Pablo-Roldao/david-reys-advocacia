<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-4 grid grid-cols-2 gap-4 sm:grid-cols-4 sm:p-0 sm:mx-10">
        <a href="{{route('admin.about')}}">
            <x-button-link>
                Sobre nós
            </x-button-link>
        </a>

        <a href="{{route('admin.expertise-area')}}">
            <x-button-link>
                Área de atuação
            </x-button-link>
        </a>

        <a href="{{route('admin.contact')}}">
            <x-button-link>
                Contato
            </x-button-link>
        </a>

        <a href="{{route('admin.posts')}}">
            <x-button-link>
                Artigos
            </x-button-link>
        </a>
        <a href="{{route('admin.team')}}">
            <x-button-link>
               Equipe 
            </x-button-link>
        </a>
        <a href="{{route('admin.offices')}}">
            <x-button-link>
                Escritórios
            </x-button-link>
        </a>
        <a href="{{route('admin.services')}}">
            <x-button-link>
                Serviços
            </x-button-link>
        </a>
        <a href="{{route('admin.images')}}">
            <x-button-link>
                Imagens do site
            </x-button-link>
        </a>
    </div>
</x-app-layout>
