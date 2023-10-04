<div class="rounded-lg bg-white p-6 mt-4">
    <div class="flex justify-between mb-4">
        <h1 class="text-xl">Imagem do sobre</h1>
        {{--Edit button--}}
        <livewire:image-about.image-about-edit :imageAbout="$imageAbout" :wire:key="'edit-image-about-'.$imageAbout->getId()"/>
    </div>
    <img src="{{asset('storage/' . $imageAbout->getPhotoPath())}}" alt="Foto da imagem do sobre"
         class="rounded-lg mx-auto h-52"/>
</div>


<script>

    const eventsToWaitFor = ['imageAboutDestroyed', 'imageAboutEdited', 'imageAboutStored'];

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
