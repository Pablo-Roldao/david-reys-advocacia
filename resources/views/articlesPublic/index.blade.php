<x-layout>
    <x-navbar about={{ true }} services={{ true }} team={{ true }}
        articles={{ true }} links={{ false }} offices={{ true }} contact={{ true }}>
    </x-navbar>

    <!-- Page Header Start -->
    <div class="container-fluid bg-page-header-articles" style="margin-bottom: 90px;">
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
    
    <section id="articles" class="container mb-5">
        <table class="table border">
            @foreach ($articles as $article)
                <tr>
                    <td class="text-dark"><strong>{{ $article->title }}</strong></td>
                    <td><a href="{{ $article->link }}" style="color: blue!important">{{ $article->link }}</a></td>
                </tr>
            @endforeach
        </table>
    </section>

</x-layout>
