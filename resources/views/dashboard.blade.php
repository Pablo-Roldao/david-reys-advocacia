<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-4 gap-4">
                <a href="{{route('admin.about')}}">
                    <x-button-link>
                        Sobre
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
                        Posts
                    </x-button-link>
                </a>
                <a href="{{route('admin.team')}}">
                    <x-button-link>
                        Time
                    </x-button-link>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
