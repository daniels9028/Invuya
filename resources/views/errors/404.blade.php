<!DOCTYPE html>
<html style="height: auto;">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Invuya | Investasi Budidaya</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link href="{{asset('admin/dist/css/adminlte.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
</head>

    <!-- Main content -->
    <div class="mb-60"></div>
    <section class="content">
        <div class="error-page">
          <h2 class="headline text-warning"> 404</h2>

          <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-warning"></i> Maaf! Halaman tidak ditemukan.</h3>

            <p>
              Sistem tidak dapat menemukan Halaman yang anda minta.
              Sebaiknya, kamu kembali ke <a href="{{route('dashboard')}}">Beranda</a>
            </p>


          </div>
          <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
</body>
</html>

{{-- @extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}
