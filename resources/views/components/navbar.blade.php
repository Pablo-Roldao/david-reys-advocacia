@php
    $contact = \App\Repositories\EloquentContactRepository::get();
    $posts = true;
@endphp

<div id="navbar" class="container sm:px-24">
    <div class="row">

        <div class="col-lg-2 navbar-brand-area navbar-brand-area-desktop-index">
            <a href="/">
                <img src="../../img/logo.png" alt="logo" class="navbar-brand navbar-brand__img nav-index-mobile">
                <img src="../../img/logo-blue.png" alt="logo" class="navbar-brand navbar-brand__img nav-index">
            </a>
        </div>

        <div class="col-lg-10 navbar-content">

            <div class="row navbar-content__contact">

                <div class="col">
                    <a href="mailto:{{$contact->getEmail()}}"><i class="fa fa-envelope"></i>
                        <span class="navbar__email">{{$contact->getEmail()}}</span></a>
                </div>

                <div class="col contact__social-medias-area">
                    <a href="{{$contact->getFacebookLink()}}"
                       class="btn btn-sm btn-outline btn-sm-square  social-media-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="{{$contact->getInstagramLink()}}"
                       class="btn btn-sm btn-outline btn-sm-square  social-media-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <nav class="navbar navbar-expand-md">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="fa fa-solid fa-bars"></span>
                </button>

                <div class="{{--collapse --}}navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        @if ($about)
                            <li class="nav-item"><a href="{{route('about')}}" class="nav-item nav-link">Sobre
                                    nós</a></li>
                        @endif
                        @if ($services)
                            <li class="nav-item"><a href="{{route('home')}}#services" class="nav-item nav-link">Serviços</a></li>
                        @endif
                        @if ($team)
                            <li class="nav-item"><a href="{{route('team')}}" class="nav-item nav-link">Equipe</a></li>
                        @endif
                        @if ($offices)
                            <li class="nav-item"><a href="{{route('offices')}}"
                                                    class="nav-item nav-link">Escritórios</a></li>
                        @endif
                        @if ($posts)
                            <li class="nav-item"><a href="{{route('posts')}}"
                                                    class="nav-item nav-link">Artigos</a>
                            </li>
                        @endif
                        @if ($contact)
                            <li class="nav-item"><a href="{{route('contact')}}"
                                                    class="nav-item nav-link">Contato</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>

        </div>

    </div>

</div>
