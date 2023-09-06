<article id="contact" class="container-fluid py-5 pb-0 ">
    <div class="container">
        <a href="/contato" class="p-0">
            @php
                $imageContact = \App\Repositories\EloquentImageContactRepository::get();
            @endphp
            <img src="{{asset('storage/' . $imageContact->getPhotoPath())}}" alt="Imagem do serviço" class="w-100 rounded">
        </a>
    </div>
</article>
