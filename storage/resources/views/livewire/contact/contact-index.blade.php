<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Contato
        </h2>
    </x-slot>

    <section class="container mx-auto my-4 bg-white rounded-lg p-6 text-gray-800">
        <div class="flex justify-between">
            <h2 class="font-bold">Informações de contato</h2>
            <livewire:contact.contact-edit :contact="$contact" />
        </div>
        <div class="flex gap-4 justify-between">
            <article id="home_contact">
                <div>
                    <span class="font-bold">Email:</span>
                    <p class="inline">{{$contact->getEmail()}}</p>
                </div>
                <div>
                    <span class="font-bold">Whatsapp:</span>
                    <p class="inline">{{$contact->getWhatsapp()}}</p>
                </div>
                <div>
                    <span class="font-bold">Mensagem pŕe-escrita do WhatsApp:</span>
                    <p class="inline">{{$contact->getPreWrittenWhatsAppMessage()}}</p>
                </div>
                <div>
                    <span class="font-bold">Link do Instagram:</span>
                    <p class="inline">{{$contact->getInstagramLink()}}</p>
                </div>
                <div>
                    <span class="font-bold">Link do Facebook:</span>
                    <p class="inline">{{$contact->getFacebookLink()}}</p>
                </div>
            </article>
        </div>

        <hr class="m-4 bg-gray-600">

        <div class="my-4">
            <livewire:phone.phone-index />
        </div>
    </section>
</div>

<script>
    window.addEventListener('contactEdited', (e) => {
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
