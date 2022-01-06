<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Invuya | Dashboard</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('backend/lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('backend/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('backend/lte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/lte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('backend/lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('backend/lte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('backend/lte/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
{{-- app.css --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app">


{{-- ini header --}}
@include('backend.lte.header')


{{-- ini sidebar --}}
@include('backend.lte.sidebar')

@include('sweetalert::alert')
{{-- ini konten --}}
@yield('content')


<script type="text/javascript">
  function deleteData(id_petambak)
  {
      var id_petambak = id_petambak;
      var url = '{{ route("petambak-delete", ":id_petambak") }}';
      url = url.replace(':id_petambak', id_petambak);
      $("#deleteForm").attr('action', url);
  }

  function formSubmit()
  {
      $("#deleteForm").submit();
  }


  function deleteData1(id_proyek)
  {
      var id_proyek = id_proyek;
      var url = '{{ route("proyek-delete", ":id_proyek") }}';
      url = url.replace(':id_proyek', id_proyek);
      $("#deleteForm1").attr('action', url);
  }

  function formSubmit1()
  {
      $("#deleteForm1").submit();
  }


  function deleteData3(id_komoditas)
  {
      var id_komoditas = id_komoditas;
      var url = '{{ route("komoditas-delete", ":id_komoditas") }}';
      url = url.replace(':id_komoditas', id_komoditas);
      $("#deleteForm3").attr('action', url);
  }

  function formSubmit3()
  {
      $("#deleteForm3").submit();
  }



  function deleteData4(id_berita)
  {
      var id_berita = id_berita;
      var url = '{{ route("berita-delete", ":id_berita") }}';
      url = url.replace(':id_berita', id_berita);
      $("#deleteForm4").attr('action', url);
  }

  function formSubmit4()
  {
      $("#deleteForm4").submit();
  }


  function deleteData5(id_pertanyaan)
  {
      var id_pertanyaan = id_pertanyaan;
      var url = '{{ route("pertanyaan-delete", ":id_pertanyaan") }}';
      url = url.replace(':id_pertanyaan', id_pertanyaan);
      $("#deleteForm5").attr('action', url);
  }

  function formSubmit5()
  {
      $("#deleteForm5").submit();
  }
</script>
{{-- ini footer --}}
@include('backend.lte.footer')


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

{{-- app.js --}}
<script src="{{asset('js/app.js')}}"></script>
<!-- jQuery -->
<script src="{{asset('backend/lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('backend/lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('backend/lte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('backend/lte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('backend/lte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backend/lte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('backend/lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('backend/lte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('backend/lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('backend/lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('backend/lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('backend/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/lte/dist/js/adminlte.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('backend/lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
{{-- custom-file-upload --}}
<script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
    </script>
{{-- date for birth --}}
<script>
        $(function() {
          $('input[name="birthday"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format('YYYY'),10)
          }, function(start, end, label) {
            var years = moment().diff(start, 'years');
            alert("You are " + years + " years old!");
          });
        });
        </script>
</body>
</html>
