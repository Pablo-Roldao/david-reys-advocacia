@php
    $expertiseArea = \App\Repositories\EloquentExpertiseAreaRepository::get();
 @endphp

<article id="services" class="container px-3 py-5">

    <div class="row px-3">
        <div class="col-lg-3">
            <h1 class="mb-1">Nossa área de atuação</h1>
            <p class="mb-0 text-left">{{$expertiseArea->getContent()}}</p>
        </div>

        <div class="col-lg-9 pt-5 pt-lg-0">
            <div class="bg-services rounded" style="height: 200px;"></div>
            <div class="owl-carousel service-carousel position-relative"
                style="margin-top: -100px; padding: 0 30px;">

                <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                    <div class="icon-box bg-services text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-landmark"></i>
                    </div>
                    <h5 class="mb-4 px-4">DIREITO CIVIL</h5>
                    <br>
                    <p class="m-0">Estamos prontos para atender suas demandas legais, oferecendo soluções
                        eficientes e assertivas para proteger seus direitos e interesses.</p>
                </div>
                <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                    <div class="icon-box bg-services text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-users"></i>
                    </div>
                    <h5 class="mb-4 px-4">DIREITO PREVIDENCIÁRIO</h5>
                    <p class="m-0"> Defendemos o seu direito à segurança e proteção social. Orientação e
                        representação legal para garantir os benefícios previdenciários que você merece.</p>
                </div>
                <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                    <div class="icon-box bg-services text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-hand-holding-usd"></i>
                    </div>
                    <h5 class="mb-4 px-4">DIREITO TRABALHISTA</h5>
                    <p class="m-0">Empenhamo-nos em proteger seus direitos trabalhistas. Suporte jurídico
                        sólido e estratégico para resolver questões trabalhistas, assegurando justiça e
                        equidade no ambiente de trabalho.</p>
                </div>
                <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                    <div class="icon-box bg-services text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-gavel"></i>
                    </div>
                    <h5 class="mb-4 px-4">DIREITO DO CONSUMIDOR</h5>
                    <p class="m-0">Defendemos os seus direitos como consumidor. Suporte legal especializado
                        para garantir a proteção dos seus interesses, a reparação de danos e a busca por
                        soluções justas em casos de conflitos e violações.</p>
                </div>
                <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                    <div class="icon-box bg-services text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-gavel"></i>
                    </div>
                    <h5 class="mb-2 px-4">DIREITO DA FAMÍLIA</h5>
                    <br>
                    <p class="m-0">Garantindo seus direitos e protegendo os laços familiares, oferecemos
                        soluções jurídicas personalizadas para todas as questões relacionadas ao Direito de
                        Família.</p>
                </div>
            </div>
        </div>

    </div>

</article>
