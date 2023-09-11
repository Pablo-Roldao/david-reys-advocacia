@php
    $contact = \App\Repositories\EloquentContactRepository::get();
@endphp

<div class="row">
    <a href="#" class="btn px-3 col back-to-top mr-2"><i class="fa fa-angle-double-up"></i></a>
    <a href="https://wa.me/{{$contact->getWhatsapp()}}?text={{urlencode($contact->getPreWrittenWhatsAppMessage())}}"
       target="_blank">
        <img src="../../img/whatsapp-logo.png" alt="Logo do WhatsApp para contato"
             class="col whatsapp-logo back-to-top mr-5">
    </a>
</div>
