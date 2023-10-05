<article class="p-4">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Equipe
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
                <option value="6">{{ 6 }}</option>
                <option value="12">{{ 12 }}</option>
                <option value="24">{{ 24 }}</option>
                <option value="48">{{ 48 }}</option>
            </select>

            <livewire:team-member.team-member-store/>

        </div>

        <div class="grid grid-cols-2 sm:grid-cols-6 gap-4">
            @foreach($teamMembers as $teamMember)
                <livewire:team-member.team-member-show :teamMember="$teamMember"
                                                       :wire:key="'show-team-member' . $teamMember->id"/>
            @endforeach
        </div>

        <div class="mt-4">
            {{$teamMembers->links()}}
        </div>
    </section>
</article>

<script>

    const eventsToWaitFor = ['teamMemberDestroyed', 'teamMemberEdited', 'teamMemberStored'];

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
