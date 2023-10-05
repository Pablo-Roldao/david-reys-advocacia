@php
    $usefulLinks = \App\Models\UsefulLink::all();
@endphp
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<x-guest-layout>

    <x-navbar usefulLinks={{false}} about={{ true }} services={{ true }} team={{ true }}
        articles={{ true }} links={{ true }} offices={{ false }} contact={{ true }}>
    </x-navbar>

    <!-- Page Header Start -->
    <div class="container-fluid" style="margin-bottom: 90px; background-color: #19197B;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Links úteis</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="/">Início</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Links úteis</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <section id="useful-links" class="container-fluid mb-5 pb-2">
        <div class="container">

            <table class="table">
                @foreach($usefulLinks as $usefulLink)
                    <tr>
                        <a href="{{$usefulLink->getLink()}}" class="text-blue-900 block mb-2" style="color: #19197B" target="_blank">{{ $usefulLink->getTitle() }}</a>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>
</x-guest-layout>
