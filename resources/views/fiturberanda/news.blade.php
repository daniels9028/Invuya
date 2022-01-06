@extends('beranda.main')

@section('isi')
 <!-- Page Wrapper Start -->
 <div class="wrapper">
    <!--Content Area Start-->
    <div id="content">
      <div class="container">
        <div class="divider-info ptb column-style">
          <div class="page-header-title">
            <h1 class="heading-title text-center">Invuya-Blog</h1>
          </div>

    <!-- Blog content + sidebar -->
          <div class="row">
            <div class="col-sm-12 col-md-9">
                @foreach ($berita as $ber)

              <div class="blog-block post-content-area text-center">
                <img src="{{asset('fotoupload/'. $ber->gambar)}}" class="img-fluid gmb">
                <div class="blog-post">
                  <h3>{{ $ber->judul }}</h3>
                <p>{{ $ber->tanggal }}</p>
                </div>
                <div class="clearfix">
                <a href="{{route('isiberita',['id_berita'=>$ber->id_berita])}}" class="btn card-btn btn-common" style="border-radius: 12px;border: 2px solid #008CBA">Selengkapnya</a>
              </div>
              <br>
              </div>
              <div class="mb-60"></div>
              @endforeach
            </div>

            <!-- Blog sidebar area -->
            <div class="col-sm-12 col-md-3">
              <div class="blog-block about-sidebar-widget">
                <img src="{{asset('frontend/img/Invuya.png')}}" class="img-fluid">
                <h4 class="text-center">Invuya Blog</h4>
                <p style="text-align:justify">Layanan yang mempermudah para Investor dan petani ikan dalam mendapatkan informasi terkait dengan sektor perikanan, khususnya di Pontianak. Informasi tersebut dapat berupa harga pasar, komoditas sektor perikanan yang berpotensi di pasar, regulasi terkait sektor perikanan, dan sebagainya.</p>
              </div>

              <div class="mb-60"></div>

              <div class="blog-block blog-posts-widget">
                <div class="widget-title">
                  <h4>Blog Lainnya</h4>
                </div>
                <div class="blog-posts-small">
                    @foreach ($berita->take(5) as $ber)
                  <div class="blog-post-small first-post">
                    <img src="{{asset('fotoupload/'. $ber->gambar)}}">
                    <a href="#">{{ $ber->judul }}</a>
                    <p>Tanggal <a href="#" class="post-date">{{ $ber->tanggal }}</a></p>
                  </div>
                  @endforeach
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
 </div>

@endsection
