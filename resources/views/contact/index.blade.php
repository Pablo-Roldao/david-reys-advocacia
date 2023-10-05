<x-guest-layout>
    <x-navbar usefulLinks={{true}}
        about={{true}} services={{true}} team={{true}} articles={{true}} links={{true}} offices={{true}} contact={{false}}></x-navbar>

    <!-- Page Header Start -->
    <div class="container-fluid" style="margin-bottom: 90px; background-color: #19197B;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Contato</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="/">Início</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contato</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid mb-5 pb-5">
        <div class="container">
            <div class="text-center pb-2">
                <h1 class="mb-4 text-uppercase">Entre em contato</h1>
            </div>
            <div class="mb-5 mb-lg-0">
                <div class="contact-form">
                    <div id="success"></div>
                    <form id="form" class="form" action="{{route('send-contact')}}" method="post">
                        @csrf

                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" id="name" name="name" class="name form-control mb-3" required>
                        <label for="phone" class="form-label">Telefone:</label>
                        <input type="text" id="phone" name="phone" class="phone form-control mb-3" required>
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="text" id="email" name="email" class="email form-control mb-3" required>
                        <label for="message">Mensagem:</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control mb-3"
                                  required></textarea>

                        <button type="submit" id="submitButton"
                                class="btn btn-primary btn-block text-white btn-enviar">Enviar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-guest-layout>
