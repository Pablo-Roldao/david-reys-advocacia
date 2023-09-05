@php
    $about = \App\Repositories\EloquentAboutRepository::get();
@endphp
<article id="about" class="container-fluid px-3 py-5 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img class="img-fluid rounded" src="img/about.png" alt="">
            </div>
            <div class="col-lg-7 mt-4 mt-lg-0">
                <h1 class="mb-2 about-services">{{$about->getHomeTitle()}}</h1>
                <p class="text-justify" style="text-indent: 1rem">{{$about->getHomeContent()}}</p>
                <a href="/sobre" class="btn mt-2">Saiba mais</a>
            </div>
        </div>
    </div>
</article>
