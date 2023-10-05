@php
    $phones = \App\Repositories\EloquentPhoneRepository::getAll();
    $contact = \App\Repositories\EloquentContactRepository::get();
    $offices = \App\Repositories\EloquentOfficeRepository::getAll();
@endphp
{{--<style>
    #footer {
        background: rgb(25,25,123);
        background: linear-gradient(to bottom, rgba(25,25,123,1) 0%, rgba(255,255,255,1) 100%);
    }
</style>--}}
<div {{--class="bg-white"--}} id="footer" style="background-color: #19197B ">

    <div class="container px-6 text-white pt-5 px-sm-3 px-md-5">
        <div class="pt-5 justify-content-between row ">
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
                    <a class="text-white mb-2" href="{{route('home')}}#services"><i class="fa fa-angle-right mr-2"></i>Serviços</a>
                    <a class="text-white mb-2" href="{{route('team')}}"><i class="fa fa-angle-right mr-2"></i>Equipe</a>
                    <a class="text-white mb-2" href="{{route('offices')}}"><i class="fa fa-angle-right mr-2"></i>Escritórios</a>
                    <a class="text-white mb-2" href="{{route('posts')}}"><i class="fa fa-angle-right mr-2"></i>Artigos</a>
                    <a class="text-white" href="{{route('contact')}}"><i class="fa fa-angle-right mr-2"></i>Contato</a>
                </div>
            </div>
            <div class="mr-5 mb-5 col">
                <h4 class="font-weight-semi-bold footer__subtitle mb-4  text-uppercase">Telefones</h4>
                <div class="d-flex flex-column justify-content-start">
                    @foreach($phones as $phone)
                        @if($phone->getIsWhatsapp())
                            <a class="text-white mb-2 flex gap-1"
                               href="https://wa.me/+55{{preg_replace('/[^A-Za-z0-9]/', '', $phone->getNumber())}}">
                                <img src="./img/whatsapp-logo.png" style="width: 20px; height: 20px;">
                                {{$phone->getNumber()}} -
                                {{$phone->getName()}}
                            </a>
                        @else
                            <a class="text-white mb-2"
                               href="tel:{{preg_replace('/[^A-Za-z0-9]/', '', $phone->getNumber())}}">
                                <i class="fa fa-phone"></i>
                                {{$phone->getNumber()}} -
                                {{$phone->getName()}}
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="mr-5 mb-5 col">
                <h4 class="font-weight-semi-bold footer__subtitle mb-4  text-uppercase">Escritórios</h4>
                <div class="d-flex flex-column justify-content-start">
                    @foreach($offices as $office)
                        <a class="text-white mb-2" href="{{$office->getMapLink()}}" target="_blank"><i
                                class="fa fa-angle-right mr-2"></i>{{$office->getName()}}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row p-4 mx-0"
             style="background: rgba(256, 256, 256, .05); text-align: center; justify-content: center;">
            <p class="m-0 text-white text-center">Copyright &copy; 2023 <a class="font-weight-bold footer__copy"
                                                                           href="#">Todos
                    os
                    direitos reservados. </a>Tecnologia e Desenvolvimento Agência Connecta </p>
        </div>
    </div>

</div>
