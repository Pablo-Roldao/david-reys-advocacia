@php
    $about = \App\Repositories\EloquentAboutRepository::get();
    $imageAbout = \App\Repositories\EloquentImageAboutRespository::get();
@endphp
<x-guest-layout>
    <x-navbar usefulLinks={{true}}
        about={{0}} services={{true}} team={{true}} articles={{true}} links={{true}} offices={{true}} contact={{true}}></x-navbar>

    <!-- Page Header Start -->
    <div class="container-fluid" style="margin-bottom: 90px; background-color: #19197B;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Sobre</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="/">Início</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Sobre</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <article id="about" class="container-fluid mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="{{asset('storage/' . $imageAbout->getPhotoPath())}}" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <h1 class="mb-4 about-services">{{$about->getTitle()}}</h1>
                    <p class="text-justify" style="text-indent: 1rem">{{$about->getContent()}}</p>
                </div>
            </div>
        </div>
    </article>

</x-guest-layout>
