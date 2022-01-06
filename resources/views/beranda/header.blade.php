{{-- Header Start --}}
<header>
    <nav class="navbar navbar-toggleable-sm navbar-light bg-black navbar1">
        <div class="container">
          <a class="navbar-brand" href="{{route('beranda')}}"><img src="{{asset('frontend/img/logo-baru.png')}}" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
            </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbar2">
            <ul class="navbar-nav">
            <li class="nav-item {{ Route::is('beranda') ? 'active' : 'null' }}">
              <a class="nav-link" href="{{ route('beranda')}}">Beranda</a>
              </li>
              <li class="nav-item {{ Route::is('produk') ? 'active' : 'null' }}">
                  <a class="nav-link" href="{{ route('produk')}}">Produk</a>
                  </li>
              <li class="nav-item {{ Route::is('sell') ? 'active' : 'null' }}">
              <a class="nav-link" href="{{ route('sell')}}">Penjualan</a>
              </li>
              <li class="nav-item {{ Route::is('news') ? 'active' : 'null' }}">
              <a class="nav-link" href="{{route('news')}}">Blog</a>
              </li>
              <li class="nav-item {{ Route::is('partner') ? 'active' : 'null' }}">
                 <a class="nav-link" href="{{route('partner')}}">Mitra</a>
              </li>
              <li class="nav-item {{ Route::is('information') ? 'active' : 'null' }}">
                 <a class="nav-link" href="{{route('information')}}">Informasi</a>
              </li>
            </li>
            <li class="nav-item {{ Route::is('masukan') ? 'active' : 'null' }}">
               <a class="nav-link" href="{{route('masukan')}}">Beri Masukan</a>
            </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
{{-- Header End --}}
