<div>
    <div class="flex mt-4 mb-1 justify-between">
        <h2 class="font-bold">Telefones</h2>
        <livewire:phone.phone-store />
    </div>
    <table class="w-full text-center bg-blue-900 text-white rounded-lg shadow-lg">
        <thead>
        <th class="p-3 hidden sm:table-cell">Tipo</th>
        <th class="p-3 hidden sm:table-cell">Número</th>
        <th class="p-3">Nome</th>
        <th class="p-3 text-end"></th>
        </thead>
        <tbody class="rounded bg-white text-gray-800">
        @foreach($phones as $phone)
            <tr>
                <td class="flex justify-center  hidden sm:table-cell">
                    @if($phone->getIsWhatsapp())
                        <img src="./img/whatsapp-logo.png" width="20px">
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                        </svg>
                    @endif
                </td>
                <td class=" hidden sm:table-cell">{{$phone->getNumber()}}</td>
                <td>{{$phone->getName()}}</td>
                <td class="flex justify-end">
                    <livewire:phone.phone-destroy :phone="$phone" :wire:key="'destroy-phone-'.$phone->id"/>
                    <livewire:phone.phone-edit :phone="$phone" :wire:key="'edit-phone-'.$phone->id"/>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script>

    const eventsToWaitFor = ['phoneDestroyed', 'phoneEdited', 'phoneStored'];

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
