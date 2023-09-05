<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="icon" href="./img/logo-blue.png">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/components/navbar.css">

    <link rel="stylesheet" href="/css/home/apresentation.css">
    <link rel="stylesheet" href="/css/home/about.css">
    <link rel="stylesheet" href="/css/home/services.css">
    <link rel="stylesheet" href="/css/home/features.css">
    <link rel="stylesheet" href="/css/home/contact.css">
    <link rel="stylesheet" href="/css/home/team.css">

    <link rel="stylesheet" href="../../css/components/footer.css">

    <style>
        * {
            box-sizing: border-box !important;
        }
    </style>
</head>
<body class="font-sans antialiased">
<x-banner/>

<div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>

@stack('modals')

@livewireScripts
</body>
</html>


{{--Phone mask--}}
<script>
    const phoneInputs = document.querySelectorAll('#phone');

    phoneInputs.forEach(function (phoneInput) {
        phoneInput.addEventListener('input', function () {
            let value = phoneInput.value.replace(/\D/g, '');

            if (value.length > 11) {
                value = value.slice(0, 11);
            }

            value = value.replace(/\D/g, "")
            value = value.replace(/(\d{2})(\d)/, "($1) $2")
            value = value.replace(/(\d{5})(\d)/, "$1-$2")

            phoneInput.value = value;
        });
    });
</script>

