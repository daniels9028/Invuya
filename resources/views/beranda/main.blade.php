<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INVUYA - Investasi Budidaya</title>
    {{-- Ini CSS --}}
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    {{-- ini Font Ikon --}}
    <!-- Fonts icons -->
  <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">


    <link rel="shortcut icon" href="{{asset('frontend/img/Invuya.png')}}" type="image/x-icon">
</head>
<body>
    @include('beranda.header')

    @include('sweetalert::alert')

    @yield('isi')


    @include('beranda.footer')

    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/tether.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/form-validator.min.js')}}"></script>
    <script src="{{asset('frontend/js/contact-form-script.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>

</body>
</html>
