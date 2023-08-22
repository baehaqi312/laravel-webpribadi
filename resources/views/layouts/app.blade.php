<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Pribadi | Luthfi Baehaqi</title>

    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />

    <!-- ===== Boxicons CSS ===== -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>

    @include('layouts.navbar')

    <main role="main">
        @yield('content')
    </main>

    @include('layouts.footer')
    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="{{ asset('assets/js/jquery/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>

    <!-- Active js -->
    <script src="{{ asset('assets/js/active.js') }}"></script>

    <!-- particles-js -->
    <script src="{{ asset('assets/js/particles.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- CSS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/home.js') }}"></script>
</body>

</html>
