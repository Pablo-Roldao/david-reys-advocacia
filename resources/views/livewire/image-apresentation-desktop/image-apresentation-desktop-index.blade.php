<div class="rounded-lg bg-white p-6 mt-4">
    <div class="flex justify-between mb-4">
        <h1 class="text-xl">Imagens de apresentação para computadores</h1>
        <livewire:image-apresentation-desktop.image-apresentation-desktop-store :wire:key="'store-image-apresentation-'" />

    </div>
    <div class="flex gap-4 justify-center">
        @foreach($images as $image)
            <livewire:image-apresentation-desktop.image-apresentation-desktop-show :image="$image" :wire:key="'show-image-apresentation-'.$image->getId()" />
        @endforeach
    </div>
</div>


<script>

    const eventsToWaitFor = ['apresentationImageDestroyed', 'apresentationImageEdited', 'apresentationImageStored'];

    function handleEvent(e) {
        Swal.fire({
            title: e.detail.title,
            icon: e.detail.icon,
            iconColor: e.detail.iconColor,
            timer: 4000,
            toast: true,
            position: 'bottom-right',
            timeProgressBar: true,
            showConfirmButton: false
        });
        setTimeout(function () {
            location.reload();
        }, 1000);
    }

    for (const eventName of eventsToWaitFor) {
        window.addEventListener(eventName, handleEvent);
    }

</script>
