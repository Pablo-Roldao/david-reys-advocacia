<div class="container rounded-lg bg-white p-6 mt-4">
    <div class="flex justify-between mb-4">
        <h1 class="text-xl">Imagem do contato</h1>
        {{--Edit button--}}
        <livewire:image-contact.image-contact-edit :imageContact="$imageContact" :wire:key="'edit-image-contact-'.$imageContact->getId()"/>
    </div>
    <img src="{{asset('storage/' . $imageContact->getPhotoPath())}}" alt="Foto do membro do time"
         class="rounded-lg"/>
</div>
