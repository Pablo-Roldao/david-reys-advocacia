<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Landing page for David Reys Advocacia" name="description">
    <meta content="author" name="Pablo Roldão">
    <title>David Reys Advocacia</title>
    <link rel="icon" href="./img/logo-blue.png">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

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
            box-sizing: border-box!important;
        }
    </style>
</head>

<body>
    <main>
        {{ $slot }}
    </main>

    <footer>
        <x-footer></x-footer>
    </footer>

    <x-backToTopWhatsapp></x-backToTopWhatsapp>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    {{-- Bootstrap JavaScript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
