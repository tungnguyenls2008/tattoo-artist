<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Greeny Ink ® 2021</title>

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header-tops">
        <div class="container">

        <h1><a href="{{$homeTitle[0]->href??''}}">{{$homeTitle[0]->name??''}}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
        <h2>{{$homeTitle2[0]->description1??''}} <span>{{$homeTitle2[0]->descriptionPost??''}}</span> {{$homeTitle2[0]->description2??''}}</h2>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                @foreach ($navlinks as $link)
                    <li><a href="{{$link->href}}">{{$link->name}}</a></li>
                @endforeach
            </ul>
        </nav><!-- .nav-menu -->

        <div class="social-links">
            @foreach ($socialLinks as $link)
                <a href="{{$link->href}}" target="_blank" class="{{$link->aClass}}"><i class="{{$link->iClass}}"></i></a>
            @endforeach
        </div>

        </div>
    </header><!-- End Header -->


    {{-- Content --}}
    @yield('content')

    {{-- Credits --}}
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
        All rights reserved ® 2021 <a href="https://greeny-ink.com/">Greeny Ink</a>
    </div>

      <!-- Vendor JS Files -->
      <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
      <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
      <script src="{{asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('vendor/counterup/counterup.min.js')}}"></script>
      <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
      <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('vendor/venobox/venobox.min.js')}}"></script>

      <!-- Template Main JS File -->
      <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
