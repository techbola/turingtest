<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        @yield('title', 'techBola Shop')
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    {{-- <link rel="stylesheet" href="{{ asset('front/vendor/font-awesome/css/font-awesome.min.css') }}"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="{{ asset('front/vendor/bootstrap-select/css/bootstrap-select.min.css') }}">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="{{ asset('front/vendor/nouislider/nouislider.css') }}">
    <!-- Custom font icons-->
    {{-- <link rel="stylesheet" href="{{ asset('front/css/custom-fonticons.css') }}"> --}}
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/hub/1-4-1/css/custom-fonticons.css">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ asset('front/vendor/owl.carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/owl.carousel/assets/owl.theme.default.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('front/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('front/img/favicon.ico') }}">
    <!-- Modernizr-->
    <script src="{{ asset('front/js/modernizr.custom.79639.js') }}"></script>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">

  </head>
  <body>

        <!-- navbar-->
        @include('front.includes.nav')

        @yield('content')

        <!-- Footer-->
        @include('front.includes.footer')

    <!-- JavaScript files-->
    <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('front/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('front/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('front/vendor/jquery-countdown/jquery.countdown.min.js') }}"></script>
    <!-- Main Template File-->
    <script src="{{ asset('front/js/front.js') }}"></script>

        <script src="{{ asset('js/toastr.min.js') }}"></script>
        <script>

            @if(Session::has('subscribed'))

            toastr.success("{{ Session::get('subscribed') }}")

            @endif

            @if(Session::has('success'))

            toastr.success("{{ Session::get('success') }}")

            @endif

        </script>

  </body>

</html>