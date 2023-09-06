@php
    $phones = \App\Repositories\EloquentPhoneRepository::getAll();
    $contact = \App\Repositories\EloquentContactRepository::get();
@endphp
<div class="container text-white pt-5 px-sm-3 px-md-5">

    <div class="pt-5 justify-content-between row footer">
        <div class="mb-5 mr-5 col">
            <a href="/" class="navbar-brand">
                <h1 class="m-0 mt-n2 display-5 footer__subtitle text-uppercase">
                    <img src="../../img/logo.png" alt="Logo da David Reys Advocacia">
                </h1>
            </a>
            <div class="d-flex justify-content-start mt-4">

                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2"
                   href="{{$contact->getFacebookLink()}}"><i class="fab fa-facebook-f"></i></a>

                <a class="btn btn-lg btn-outline-light btn-lg-square"
                   href="{{$contact->getInstagramLink()}}"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="mb-5 mr-5 links-populares col-auto">
            <h4 class="font-weight-semi-bold footer__subtitle mb-4  text-uppercase">Menu</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Início</a>
                <a class="text-white mb-2" href="{{route('about')}}"><i class="fa fa-angle-right mr-2"></i>Sobre nós</a>
                <a class="text-white mb-2" href="{{route('home')}}#services"><i class="fa fa-angle-right mr-2"></i>Nossos
                    serviços</a>
                <a class="text-white mb-2" href="{{route('team')}}"><i class="fa fa-angle-right mr-2"></i>Nossa equipe</a>
                <a class="text-white mb-2" href="{{route('offices')}}"><i class="fa fa-angle-right mr-2"></i>Escritórios</a>
                <a class="text-white mb-2" href="{{route('posts')}}"><i class="fa fa-angle-right mr-2"></i>Posts</a>
                <a class="text-white" href="{{route('contact')}}"><i class="fa fa-angle-right mr-2"></i>Contato</a>
            </div>
        </div>
        <div class="mr-5 mb-5 col">
            <h4 class="font-weight-semi-bold footer__subtitle mb-4  text-uppercase">Telefones</h4>
            <div class="d-flex flex-column justify-content-start">
                @foreach($phones as $phone)
                    @if($phone->getIsWhatsapp())
                        <a class="text-white mb-2 flex gap-1" href="https://wa.me/{{preg_replace('/[^A-Za-z0-9]/', '', $phone->getNumber())}}">
                            <img src="./img/whatsapp-logo.png" width="20px" class="h-10">
                            {{$phone->getNumber()}} -
                            {{$phone->getName()}}
                        </a>
                    @else
                        <a class="text-white mb-2" href="tel:{{preg_replace('/[^A-Za-z0-9]/', '', $phone->getNumber())}}">
                            <i class="fa fa-phone"></i>
                            {{$phone->getNumber()}} -
                            {{$phone->getName()}}
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="mr-5 mb-5 col">
            <h4 class="font-weight-semi-bold footer__subtitle mb-4  text-uppercase">Nossos Escritórios</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="https://goo.gl/maps/y6yQ1GoH5KJYfLW7A"><i
                        class="fa fa-angle-right mr-2"></i>Maceió-AL</a>
                <a class="text-white mb-2" href="https://goo.gl/maps/hvrzXTFNZnktyhUGA"><i
                        class="fa fa-angle-right mr-2"></i>Garanhuns-PE</a>
                <a class="text-white mb-2" href="https://goo.gl/maps/KxTPVeQhCbGPtWKu7"><i
                        class="fa fa-angle-right mr-2"></i>União dos Palmares-AL</a>
                <a class="text-white mb-2" href="https://goo.gl/maps/spceyVQ39dArHmZf9"><i
                        class="fa fa-angle-right mr-2"></i> Porto Calvo-AL</a>
            </div>
        </div>
    </div>
    <div class="row p-4 mt-5 mx-0"
         style="background: rgba(256, 256, 256, .05); text-align: center; justify-content: center;">
        <p class="m-0 text-white text-center">Copyright &copy; 2023 <a class="font-weight-bold footer__copy" href="#">Todos
                os
                direitos reservados. </a>Tecnologia e Desenvolvimento Agência Connecta </p>

    </div>
</div>
