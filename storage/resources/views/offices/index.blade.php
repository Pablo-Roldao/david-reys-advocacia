@php
    $offices = \App\Repositories\EloquentOfficeRepository::getAll();
@endphp
<x-guest-layout>

    <x-navbar about={{ true }} services={{ true }} team={{ true }}
        articles={{ true }} links={{ true }} offices={{ false }} contact={{ true }}>
    </x-navbar>

    <!-- Page Header Start -->
    <div class="container-fluid" style="margin-bottom: 90px; background-color: #19197B;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Escritórios</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="/">Início</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Escritórios</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <article id="about" class="container-fluid py-5 pb-5">
        <div class="container">
            <div class="row">
                @foreach($offices as $office)
                    <div class="col-lg-4">
                        <img class="img-fluid rounded" src="{{asset('storage/'.$office->getPhotoPath())}}" alt="">
                        <h1>{{$office->getName()}}</h1>
                        <p style="color: black!important">
                            <strong>Telefone:</strong> <a href="tel:+55{{preg_replace("/[^0-9]/", "", $office->getPhone())}}" style="color: black!important">
                            {{$office->getPhone()}}</a>
                        </p>
                        <p style="color: black!important"><strong>Endereço:</strong> <a href="{{$office->getMapLink()}}"
                                                                       style="color: black!important">{{$office->getAddress()}}</a></p>
                    </div>
                @endforeach
            </div>
        </div>
    </article>
</x-guest-layout>
