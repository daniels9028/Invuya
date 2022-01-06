@extends('beranda.main')

@section('isi')
 {{-- Carousel Start --}}
 <div id="light-slider" class="carousel slide">
        <div id="carousel-area">
          <div id="carousel-slider" class="carousel slide" data-rid e="carousel">

            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active bg2">
                <img src="{{asset('frontend/img/slider/bg-i1.jpg')}}" alt="" class="bg3">
                <div class="carousel-caption">
                  <h3 class="slide-title animated fadeInDown"><span class="text-primary">INVUYA</span> - Investasi Budidaya</h3>
                  <a href="#" class="btn btn-lg btn-default-filled animated fadeInUp">Unduh Aplikasi</a>
                  <a href="#apaitu" class="btn btn-lg btn-common animated fadeInUp">Selengkapnya</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('frontend/img/slider/bg-i2.jpeg')}}" alt="" class="bg3">
                <div class="carousel-caption">
                  <h3 class="slide-title animated fadeInDown"><span class="text-primary">Download Aplikasi-nya</span> Sekarang Juga</h3>
                  
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('frontend/img/slider/bg-i3.jpg')}}" alt="" class="bg3">
                <div class="carousel-caption">
                  <h3 class="slide-title animated fadeInDown"><span class="text-primary">Investasi </span> Perikanan Yang Mudah, Aman dan Terpercaya</h3>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
              <span class="carousel-control carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
              <span class="carousel-control carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
  <!-- End sliders -->

       {{-- Content Start --}}
       <br>
       <div class="container">
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-lg text-center">
              <img src="{{asset('frontend/img/investor-investment-investing-invest-009-512.png')}}" alt="employee" class="float-left">
              <a href="#modal1" data-toggle="modal" data-target="#modal1"><H4 style="text-decoration:underline;text-decoration-color:blue;">INVUYA-INVESTMENT</H4></a>
                <div class="modal fade modal1" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="col-12 modal-title text-center" id="modal1">INVUYA-INVESTMENT</h5>
                      </div>
                      <!-- body -->
                      <div class="modal-body" style="text-align:justify">
                      Layanan yang memudahkan para petani ikan di Pontianak dalam mengakses permodalan dgan mempertemukan investor yang berbasis crowfunding.
                      </div>
                      <!-- footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="col-lg text-center">
              <img src="{{asset('frontend/img/seller-icon-12.jpg')}}" alt="employee" class="float-left">
              <a href="#modal2" data-toggle="modal" data-target="#modal2"><H4 style="text-decoration:underline;text-decoration-color:blue;">INVUYA-SELL</H4></a>
              <div class="modal fade modal2" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="col-12 modal-title text-center" id="modal2">INVUYA-SELL</h5>
                      </div>
                      <!-- body -->
                      <div class="modal-body"style="text-align:justify">
                      Layanan yang memudahkan para petani ikan di Pontianak dalam memasarkan hasil panennya tanpa harus melalui tengkulak. Seluruh masyarakat di Pontianak dapat melakukan pemesanan hasil panen tersebut ketika membuka platform INVUYA dengan mudah dan cepat.
                      </div>
                      <!-- footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

              <div class="col-lg text-center">
                <img src="{{asset('frontend/img/news-icon-43.png')}}" alt="employee" class="float-left">
                <a href="#modal3" data-toggle="modal" data-target="#modal3"><H4 style="text-decoration:underline;text-decoration-color:blue;">INVUYA-NEWS</H4></a>
                  <div class="modal fade modal3" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="col-12 modal-title text-center" id="modal3">INVUYA-NEWS</h5>
                        </div>
                        <!-- body -->
                        <div class="modal-body" style="text-align:justify">
                          Layanan yang mempermudah para Investor dan petani ikan dalam mendapatkan informasi terkait dengan sektor perikanan, khususnya di Pontianak. Informasi tersebut dapat berupa harga pasar, komoditas sektor perikanan yang berpotensi di pasar, regulasi terkait sektor perikanan, dan sebagainya.
                        </div>
                        <!-- footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>


          </div>
        </div>
        </div>
        </div>
        </div>
  <div class="wrapper">
        <!-- Content Area Start -->
        <div id="apaitu">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="page-header-title">
                        <h2 class="heading-title text-center">Apa itu INVUYA?</h2>
                      </div>
                      <div class="row">
                            <div class="col-md-6 col-sm-6 text-center">
                                    <img src="{{asset('frontend/img/Invuya-tentang.png')}}" class="img-fluid" alt="">
                                  </div>

                        <div class="col-md-6 col-sm-6">
                        <p class="lead" style="text-align:justify">&nbsp;&nbsp;&nbsp;Invuya merupakan sebuah platform investasi proyek budidaya perikanan yang berbasis crowdfunding dengan memanfaatkan teknologi. Invuya menghubungkan petambak yang telah terkualifikasi tetapi tidak memiliki modal yang cukup dalam menjalankan bisnis perikanannya dengan masyarakat yang berminat untuk melakukan investasi. Keuntungan dari penjualan hasil panen akan dibagikan kepada para petambak, investor, serta INVUYA. Selain mendapatkan keuntungan finansial, para investor secara tidak langsung turut berkontribusi dalam mengoptimalan pemanfaatan lahan dan menyejahterakan para petambak. Selain itu, INVUYA juga membantu para petambak dalam memasarkan hasil panennya serta menyediakan informasi terkait sektor perikanan bagi masyarakat khususnya di kota Pontianak.</p>
                        <a href="#footer1" class="btn btn-info btn pull-right" style="border-radius:12px">Hubungi Kami</a>
                      </div>
                </div>
                <div class="mb-60"></div>

                    </div>
                </div>
              </div>
            </div>
        <!-- Content Area End -->
            <div id="mengapa">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="heading-title text-center">Mengapa Memilih INVUYA?</h2>
                </div>

                <div class="features-wrap info-fitur">
                  <div class="row">
                    <!-- Start featured -->
                    <div class="col-md-4 col-sm-6">
                      <div class="featured-box">
                        <div class="featured-icon">
                        <img src="{{asset('frontend/img/ikon1.png')}}" class="img-fitur">
                        </div>
                        <div class="featured-content">
                          <h4 class="judul">Investasi & Produk</h4>
                          <p class="judul1">Berinvestasi dengan memilih komoditas yang tersedia dengan hanya 100.000 & transfer uang anda sesuai dengan produk yang anda pilih.</p>
                        </div>
                      </div>
                    </div>
                    <!-- End featured -->

                    <!-- Start featured -->
                    <div class="col-md-4 col-sm-6">
                      <div class="featured-box">
                        <div class="featured-icon">
                        <img src="{{asset('frontend/img/ikon2.png')}}" class="img-fitur">
                        </div>
                        <div class="featured-content">
                          <h4 class="judul">Keamanan</h4>
                          <p class="judul1">Investasi dan pantau perkembangan anda melalui laporan prospectus melalui dashboard INVUYA.</p>
                        </div>
                      </div>
                    </div>
                    <!-- End featured -->

                    <!-- Start featured -->
                    <div class="col-md-4 col-sm-6">
                      <div class="featured-box">
                        <div class="featured-icon">
                        <img src="{{asset('frontend/img/ikon3.png')}}" class="img-fitur">
                        </div>
                        <div class="featured-content">
                          <h4 class="judul">Perikanan</h4>
                          <p class="judul1">Memperdayakan dan mengembangkan sumber daya perikanan dan petambak yang berdaya saing.</p>
                        </div>
                      </div>
                    </div>
                    <!-- End featured -->
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>

        <h3 class="mt-100 text-center tulisan">Produk Invuya</h3>
          <hr>
          <div class="container">
          <div class="card-deck">
             
              <div class="card info-card">
                <div class="mb-30">
                  <div class="row">
                @foreach($proyek->take(3) as $pro)
                <div class="col-md-4 text-center">
                      <br>
                    <h5 class="card-title" style="text-align:center;height:40px">{{$pro->nama_proyek}}</h5>
                    <img src="{{asset('fotoupload/'. $pro->gambar)}}" style="width:250px" class="card-img-top img-kerja img-thumbnail" alt="...">
                    <div class="card-body">
                    <br>
                     
                    </div>
                    <div class="card-footer clearfix">
                        <a href="{{route('produk')}}" class="btn btn-common tombol btn-md pull-right" style="border-radius: 20px;border: 2px solid #008CBA">Lebih Banyak</a>
                    </div>
                  </div>
                  {{-- @endfor --}}
                @endforeach
                  </div>
                </div>
              </div>
             
          </div>
          </div>

            <!-- Content Area End -->
            <!--Cara Kerja-->
          <h3 class="mt-100 text-center tulisan">Cara Kerja INVUYA</h3>
          <hr>
          <div class="container">
          <div class="card-deck">
              <div class="card info-card">
                  <h5 class="card-title" style="text-align:center">1</h5>
                <img src="{{asset('frontend/img/slider/kerja1.jpg')}}" class="card-img-top img-kerja" alt="...">
                <div class="card-body">
                <br>
                  <p class="card-text  ">Melakukan pemilihan produk investasi perikanan dengan berbagai pilihan komoditas yang tersedia.</p>
                </div>
              </div>
              <div class="card info-card">
                  <h5 class="card-title" style="text-align:center">2</h5>
                <img src="{{asset('frontend/img/slider/kerja2.jpg')}}" class="card-img-top img-kerja" alt="...">
                <div class="card-body">
                <br>
                  <p class="card-text info-text">Melakukan transfer uang yang sesuai dengan pilihan produk investasi perikanan Anda.</p>
                </div>
              </div>
              <div class="card info-card">
                  <h5 class="card-title" style="text-align:center">3</h5>
                <img src="{{asset('frontend/img/slider/kerja3.jpg')}}" class="card-img-top img-kerja" alt="...">
                <div class="card-body">
                <br>
                  <p class="card-text info-text">Melakukan pemantauan proyek produk yang telah Anda investasikan melalui alat komunikasi yang Anda miliki.</p>
                </div>
              </div>
          </div>
          </div>

          <!--Akhir Cara Kerja-->


      </div>
    {{-- Content End --}}

@endsection
