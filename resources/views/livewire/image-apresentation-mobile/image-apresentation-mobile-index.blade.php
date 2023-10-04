<div class="rounded-lg bg-white p-6 mt-4">
    <div class="flex justify-between mb-4">
        <h1 class="text-xl">Imagens de apresentação para smartphones</h1>
        <livewire:image-apresentation-mobile.image-apresentation-mobile-store :wire:key="'store-image-apresentation-mobile-'" />

    </div>
    <div class="flex gap-4 justify-center">
        @foreach($images as $image)
            <livewire:image-apresentation-mobile.image-apresentation-mobile-show :image="$image" :wire:key="'show-image-apresentation-mobile-'.$image->getId()" />
        @endforeach
    </div>
</div>
