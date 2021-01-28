<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <title>@yield('title')</title>

  <!-- Favicons -->
  <link href="{{ asset('/arsha/assets/img/favicon.ico') }}" rel="icon">
  <link href="{{ asset('/arsha/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/arsha/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/arsha/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/arsha/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/arsha/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('/arsha/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('/arsha/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/arsha/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/arsha/assets/css/style.css') }}" rel="stylesheet">
  
</head>



  @yield('nav-bar')
  <!-- ======= Header ======= -->

  <!-- End Header -->
    @yield('front-screen') 
  <!-- ======= Hero Section ======= -->

  <main id="main">
    @yield('content')
  </main><!-- End #main -->

  <hr>
  <!-- ======= Footer ======= -->
  @include('layouts.arsha.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

      <!-- Load Facebook SDK for JavaScript -->
      {{-- @include('layouts.argon.chat-messenger') --}}

  <!-- Vendor JS Files -->
  <script src="{{ asset('/arsha/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/arsha/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('/arsha/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/arsha/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('/arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/arsha/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('/arsha/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/arsha/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/arsha/assets/js/main.js') }}"></script>

  @yield('scripts')

</body>

</html>