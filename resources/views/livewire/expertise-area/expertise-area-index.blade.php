<article class="p-4">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Área de atuação
        </h2>
    </x-slot>

    <section class="bg-white rounded-lg p-6 text-gray-800 sm:mx-10">
        <div class="flex justify-between">
            <h2 class="text-2xl font-bold">Área de atuação</h2>
            <livewire:expertise-area.expertise-area-edit :expertiseArea="$expertiseArea" />
        </div>
        <article id="home_expertiseArea" class="mb-4">
            <div>
                <span class="font-bold">Conteúdo:</span>
                <p class="inline text-justify">{{$expertiseArea->getContent()}}</p>
            </div>
        </article>


    </section>
</article>

<script>
    window.addEventListener('expertiseAreaEdited', (e) => {
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
        setTimeout(function() {
            location.reload();
        }, 1000);
    });

</script>
