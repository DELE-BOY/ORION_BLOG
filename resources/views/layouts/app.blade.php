<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name', 'ORION VIII') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/ICON.png" rel="icon">
    <link href="assets/img/ICON.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href=" {{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href=" {{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href=" {{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href=" {{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">






    <!-- Scripts -->
    <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src=" {{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- @if (Auth::check())
        <script>
            var chatbot_id = 11469;
            ! function() {
                var t, e, a = document,
                    s = "smatbot-chatbot";
                a.getElementById(s) || (t = a.createElement("script"), t.id = s, t.type = "text/javascript", t.src =
                    "https://smatbot.s3.amazonaws.com/files/smatbot_plugin.js.gz", e = a.getElementsByTagName("script")[0],
                    e.parentNode.insertBefore(t, e))
            }();
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fingerprintjs2/1.5.1/fingerprint2.min.js"></script>
    @endif -->

</head>


<body>
    <div class="app">
      @include('inc.announcement')
        @include('inc.nav')

        @yield('content')

        @include('inc.footer')
    </div>



</body>

</html>
