@php
    $team = \App\Repositories\EloquentTeamMemberRepository::getAll();
@endphp
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<x-guest-layout>
    <x-navbar about={{true}} services={{true}} team={{false}} articles={{true}} links={{true}} offices={{true}} contact={{true}}></x-navbar>

    <!-- Page Header Start -->
    <div class="container-fluid" style="margin-bottom: 90px; background-color: #19197B;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Equipe</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="/">Início</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Equipe</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <article id="about" class="container-fluid mb-5 pb-5">
            @foreach($team as $teamMember)
                <div class="container py-4" id="{{$teamMember->getId()}}">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 text-center">
                            <img class="img-fluid rounded" src="{{asset('storage/' . $teamMember->getPhotoPath())}}" alt="">
                        </div>
                        <div class="col-lg-7 mt-lg-0">
                            <h2 class="bg-white about__title rounded mb-0 ml-1 d-lg-block text-left text-uppercase">
                                {{$teamMember->getName()}} </h2>
                            <h3 class="bg-white rounded mb-0 ml-1 d-lg-block text-left text-xl">
                                {{$teamMember->getPosition()}} </h3>
                            <div class="whitespace-pre-line text-justify">
                                {{$teamMember->getDescription()}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </article>
</x-guest-layout>

