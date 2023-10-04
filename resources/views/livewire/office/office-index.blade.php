<article class="p-4">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Escritórios
        </h2>
    </x-slot>
    <section class="sm:mx-10">
        <div class="grid gap-4 mb-4 sm:grid-cols-6">
            <x-input wire:model="search" placeholder="Pesquisar..." class="col-span-6 sm:col-span-3"/>

            <select placeholder="{{ __('Order by') }}" wire:model="orderBy" name="orderBy" id="orderBy"
                    class="border-gray-300 shadow-sm rounded-lg col-span-6 sm:col-span-1">
                <option value="name">Nome</option>
                <option value="position">Cargo</option>
                <option value="created_at">Data de criação</option>
                <option value="updated_at">Data de atualização</option>
                <option value="description">Descrição</option>
            </select>

            <select placeholder="{{ __('Per page') }}" wire:model="perpage" name="perpage" id="perpage"
                    class="border-gray-300 shadow-sm rounded-lg col-span-6 sm:col-span-1">
                <option value="4">{{ 4 }}</option>
                <option value="8">{{ 8 }}</option>
                <option value="16">{{ 16 }}</option>
                <option value="32">{{ 32 }}</option>
            </select>

            <livewire:office.office-store/>

        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            @foreach($offices as $office)
                <livewire:office.office-show :office="$office"
                                             :wire:key="'show-office' . $office->id"/>
            @endforeach
        </div>

        <div class="mt-4">
            {{$offices->links()}}
        </div>
    </section>
</article>

<script>

    const eventsToWaitFor = ['officeDestroyed', 'officeEdited', 'officeStored'];

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
