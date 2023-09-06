<x-app-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Imagens do site
            </h2>
        </x-slot>

        <section>
            <livewire:image-contact.image-contact-index />
            <livewire:image-about.image-about-index />
        </section>
    </div>
</x-app-layout>

<script>
    const eventsToWaitFor = ['imageAboutEdited' , 'imageContactEdited'];

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
