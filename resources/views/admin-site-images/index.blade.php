<x-app-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Imagens do site
            </h2>
        </x-slot>

        <section>
            <livewire:image-contact.image-contact-index/>
            <livewire:image-about.image-about-index/>
        </section>
    </div>
</x-app-layout>
