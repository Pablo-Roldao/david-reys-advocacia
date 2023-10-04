<section class="p-4 sm:mx-10">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Artigos
        </h2>
    </x-slot>
    <div class="grid sm:grid-cols-6 gap-4 mb-3">
        <x-input wire:model="search" placeholder="Pesquisar..." class="col-span-6 sm:col-span-3"/>

        <select placeholder="{{ __('Order by') }}" wire:model="orderBy" name="orderBy" id="orderBy" class="border-gray-300 shadow-sm rounded-lg col-span-6 sm:col-span-1">
            <option value="title">Título</option>
            <option value="author">Autor</option>
            <option value="created_at">Data de criação</option>
            <option value="updated_at">Data de atualização</option>
            <option value="content">Conteúdo</option>
        </select>

        <select placeholder="{{ __('Per page') }}" wire:model="perpage" name="perpage" id="perpage" class="border-gray-300 shadow-sm rounded-lg col-span-6 sm:col-span-1">
            <option value="5">{{ 5 }}</option>
            <option value="10">{{ 10 }}</option>
            <option value="20">{{ 20 }}</option>
            <option value="50">{{ 50 }}</option>
        </select>

        <livewire:post.post-store />

    </div>
    <table class="bg-blue-900 rounded text-white shadow-sm w-full">
        <thead>
        <tr>
            <th class="p-3 align-middle">Título</th>
            <th class="p-3 align-middle">Autor</th>
            <th class="p-3 align-middle">Data de criação</th>
        </tr>
        </thead>
        <tbody class="bg-white text-gray-800">
        @foreach($posts as $post)
            <tr>
                <td class="p-3">
                    <livewire:post.post-show :post="$post" :wire:key="'show-post-'.$post->id"/>
                </td>
                <td class="p-3">{{$post->getAuthor()}}</td>
                <td class="p-3">{{$post->getFormattedCreationDate()}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{$posts->links()}}
    </div>
</section>

<script>

    const eventsToWaitFor = ['postDestroyed', 'postEdited', 'postStored'];

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
