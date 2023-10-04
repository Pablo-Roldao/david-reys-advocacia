<article class="p-4 sm:px-16">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sobre
        </h2>
    </x-slot>

    <section class="bg-white rounded-lg p-6 text-gray-800 sm:mx-10">
        <div class="flex justify-between mb-4">
            <h2 class="text-2xl font-bold">Sobre</h2>
            <livewire:about.about-edit :about="$about"/>
        </div>
        <article id="home_about" class="mb-4">
            <h3 class="text-xl">Prévia</h3>
            <div>
                <span class="font-bold">Título:</span>
                <p class="inline">{{$about->getHomeTitle()}}</p>
            </div>
            <div>
                <span class="font-bold">Conteúdo:</span>
                <p class="inline text-justify">{{$about->getHomeContent()}}</p>
            </div>
        </article>

        <article id="home_about" class="mb-4">
            <h3 class="text-xl">Completo</h3>
            <div>
                <span class="font-bold">Título:</span>
                <p class="inline">{{$about->getTitle()}}</p>
            </div>
            <div>
                <span class="font-bold">Conteúdo:</span>
                <p class="inline text-justify">{{$about->getContent()}}</p>
            </div>
        </article>
    </section>
</article>

<script>
    window.addEventListener('aboutEdited', (e) => {
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
    });

</script>
