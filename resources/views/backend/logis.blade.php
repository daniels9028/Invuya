<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrator</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('backend/logis/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('backend/logis/css/style.css')}}">
       <!-- Favicon-->
   <link rel="shortcut icon" href="{{asset('backend/logis/images/Invuya.png')}}">
</head>
<body style="background-image: url(backend/logis/images/Aquaculture.jpg);">

    <div class="main">
@yield('content')



</div>
</body>
<!-- JS -->
<script src="{{asset('backend/logis/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/logis/js/main.js')}}"></script>
</body>
</html>
