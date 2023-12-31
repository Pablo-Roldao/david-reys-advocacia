@php
    $posts = \App\Repositories\EloquentPostRepository::getAll();
@endphp

<x-guest-layout>

    <x-navbar usefulLinks={{true}} about={{ true }} services={{ true }} team={{ true }}
        articles={{ true }} links={{ true }} offices={{ false }} contact={{ true }}></x-navbar>

    <!-- Page Header Start -->
    <div class="container-fluid" style="margin-bottom: 90px; background-color: #19197B;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Artigos</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="/">Início</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Artigos</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <livewire:post.post-index-public />


</x-guest-layout>
