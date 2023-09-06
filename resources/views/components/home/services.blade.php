@php
    $expertiseArea = \App\Repositories\EloquentExpertiseAreaRepository::get();
@endphp

<article id="services" class="container px-3 py-5">

    <div class="row px-3">
        <div class="col-lg-3">
            <h1 class="mb-1">Nossa área de atuação</h1>
            <p class="mb-0 text-left">{{$expertiseArea->getContent()}}</p>
        </div>

        <div class="col-lg-9 pt-5 pt-lg-0">
            <div class="bg-services rounded" style="height: 200px;"></div>
            <div class="owl-carousel service-carousel position-relative"
                 style="margin-top: -100px; padding: 0 30px;">

                @php
                    $services = \App\Repositories\EloquentServiceRepository::getAll();
                @endphp
                @foreach($services as $service)
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                        <div class="icon-box bg-services text-primary mt-2 mb-4">
                            <img src="{{asset('storage/' . $service->getPhotoPath())}}" alt="Imagem do serviço" class="w-50">
                        </div>
                        <h5 class="mb-4 px-4 text-uppercase">{{$service->getTitle()}}</h5>
                        <br>
                        <p class="m-0">{{$service->getContent()}}</p>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

</article>
