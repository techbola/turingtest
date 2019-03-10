<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard - Admin Portal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    {{-- <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/css/font-awesome.min.css') }}"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    {{-- <link rel="stylesheet" href="{{ asset('admin/css/fontastic.css') }}"> --}}
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Summernote CSS-->
    <link rel="stylesheet" href="{{ asset('admin/vendor/summernote/summernote-bs4.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('admin/css/style.default.premium.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('front/img/favicon.ico') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">

  </head>
  <body>
    <div class="page">

      <!-- Main Navbar-->
        @include('admin.includes.nav')

      <div class="page-content d-flex align-items-stretch">

        <!-- Side Navbar -->
          @include('admin.includes.sidebar')

        <div class="content-inner">

            @yield('content')

        </div>

      </div>

    </div>

    <!-- JavaScript files-->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/js/charts-home.js') }}"></script>
    <!-- Notifications-->
    <script src="{{ asset('admin/vendor/messenger-hubspot/build/js/messenger.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/messenger-hubspot/build/js/messenger-theme-flat.js') }}"></script>
    {{--<script src="{{ asset('admin/js/home-premium.js') }}"></script>--}}

    <!-- Summernote-->
    <script src="{{ asset('admin/vendor/summernote/summernote-bs4.min.js') }}"></script>
    <!-- Summernote init-->
    <script src="{{ asset('admin/js/forms-texteditor.js') }}"></script>

    <!-- Main File-->
    <script src="{{ asset('admin/js/front.js') }}"></script>

    @yield('page_scripts')

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