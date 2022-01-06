 @extends('perantara.perantara')

 @section('isi')
 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="">Investasi Budidaya</a>
      <a href="{{route('dashboard')}}" class="navbar-brand">Admin</a>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">INVUYA</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Silahkan pilih Laman yang ingin dituju</h2>

      <a href="{{route('beranda')}}" class="btn btn-secondary">Landing Page</a>
      </div>
    </div>
  </header>


 @endsection
