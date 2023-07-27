<div id="navbar" class="container">
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
                    <a href="mailto:davidreysadvogado@gmail.com"><i class="fa fa-envelope"></i>
                        <span class="navbar__email">davidreysadvogado@gmail.com</span></a>
                </div>

                <div class="col contact__social-medias-area">
                    <a href="https://www.facebook.com/davidreysadvocacia/"
                        class="btn btn-sm btn-outline btn-sm-square  social-media-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="https://www.instagram.com/davidreys_advocacia/?igshid=MzRlODBiNWFlZA%3D%3D"
                        class="btn btn-sm btn-outline btn-sm-square  social-media-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <nav class="navbar navbar-expand-md">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-solid fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        @if ($about)
                            <li class="nav-item"><a href="/sobre" class="nav-item nav-link">Sobre
                                    nós</a></li>
                        @endif
                        @if ($services)
                            <li class="nav-item"><a href="/index.php#services" class="nav-item nav-link">Nossos
                                    serviços</a></li>
                        @endif
                        @if ($team)
                            <li class="nav-item"><a href="/time" class="nav-item nav-link">Nossa
                                    equipe</a></li>
                        @endif
                        @if ($articles)
                            <li class="nav-item"><a href="/artigos" class="nav-item nav-link">Artigos</a></li>
                        @endif
                        @if ($links)
                            <li class="nav-item"><a href="/links-uteis" class="nav-item nav-link">Links
                                    úteis</a></li>
                        @endif
                        @if ($offices)
                            <li class="nav-item"><a href="/escritorios" class="nav-item nav-link">Escritórios</a></li>
                        @endif
                        @if ($contact)
                            <li class="nav-item"><a href="/contato" class="nav-item nav-link">Contato</a></li>
                        @endif
                </div>
            </nav>

        </div>

    </div>

</div>
