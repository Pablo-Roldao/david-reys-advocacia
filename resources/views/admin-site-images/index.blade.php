<x-app-layout>
    <div class="p-4">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Imagens do site
            </h2>
        </x-slot>

        <section class="sm:mx-10">
            <livewire:image-contact.image-contact-index/>
            <livewire:image-about.image-about-index/>
            <livewire:image-apresentation-desktop.image-apresentation-desktop-index/>
            <livewire:image-apresentation-mobile.image-apresentation-mobile-index/>
        </section>
    </div>
</x-app-layout>
