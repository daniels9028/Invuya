@extends('beranda.main')

@section('isi')
  <!-- Page Wrapper Start -->
  <div class="wrapper">
    <!-- Content Area Start -->
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header-title">
              <h2 class="heading-title text-center">Syarat dan Ketentuan</h2>
            </div>
            <div class="row">
          <div class="col-md-6 col-sm-6 align-items-md-center">
                <h4 class="sub-title">Hak Investor</h4>
            <ul class="list-featured space-bottom-40">
              <li>Investor berhak mendapatkan bagi-hasil dari investasi yang dimilikinya ketika budidaya ikan dipanen menghasilkan laba bersih.</li>
              <li>Investor berhak atas laporan kemajuan budidaya ikan dan pemeliharaan budidayanya melalui sistem pelaporan yang disiapkan di dalam aplikasi mobile INVUYA.</li>
              <li>Investor berhak mendapatkan update laporan terkait perkembangan budidaya secara berkala selama 2 minggu sekali.</li>
              <li>Investor dari waktu ke waktu berhak untuk melihat secara fisik investasi budidaya ikan yang dimilikinya. Seluruh biaya perjalanan menjadi tanggungjawab investor terkait.</li>
              <li>Investor berhak mendapatkan sertifikat digital atas proyek budidaya perikanan yang telah mereka danai.Informasi dalam sertifikat digital tersebut berisi nama investor, nama proyek, serta nominal uang yang telah diinvestasikan.</li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-6 align-items-md-center">
                <h4 class="sub-title">Kewajiban Investor</h4>
            <ul class="list-featured space-bottom-40">
              <li>Investor wajib melengkapi data diri sebelum memulai investasi</li>
              <li>Investor wajib melakukan pembayaran melalui transfer bank yang sudah ditentukan oleh INVUYA mulai dari minimal 1 lembar = Rp 100.000,- hingga maksimal total dana crowdfunding yang dibutuhkan.</li>
              <li>Investor wajib melakukan verivikasi transfer dana ke platform INVUYA.</li>
              <li>Investor yang mengunjungi langsung lokasi budidaya ikan yang diinvestasikan, wajib ikut menjaga ekosistem budidaya agar tidak mengganggu kestabilan ekosistem budidaya.</li>
            </ul>
        </div>
          </div>
          </div>
        </div>

          <div class="mb-60"></div>

          <div class="row">
          <div class="col-md-12 ">
                <div class="page-header-title  ">
                  <h2 class="heading-title text-center">Pertanyaan yang sering diajukan</h2>
                </div>
                <div class="row">
                      <!-- tabbed accordions -->
                      <div class="col-md-12">
                          @foreach ($pertanyaan as $per)
          
                        <div class="blog-block post-content-area header" style="text-align:center;">
                          <br>
                          <h4>{{$per->pertanyaan}}</h4>
                          
                          <hr>
                          <div class="body" style="text-align:justify;margin-left:20px;margin-right:20px">
                          &nbsp;&nbsp;{{$per->jawaban}}
                          <br>
                          <br>
                          </div>
                        </div>
                        <div class="mb-60"></div>
                        @endforeach
                      </div>
                </div>
                </div>
                </div>
                        <div class="mb-60"></div>
                        <div class="row">
                            <div class="col-md-12">
                              <div class="page-header-title">
                                <h2 class="heading-title text-center">Ketentuan Umum</h2>
                              </div>
                              <div class="row">
                            <div class="col-md-6 col-sm-6 align-items-md-center">
                              <ul class="list-featured space-bottom-40">
                                <li>Invuya menyediakan lembaran yang berupa saham dimana perlembar saham bernilai 1 lembar = Rp 100.000,- hingga maksimal total dana crowdfunding yang dibutuhkan untuk memenuhi kebutuhan proyek budidaya ikan</li>
                                <li>Investor harus berusia minimal maupun investor yang telah berusia lebih dari 19 tahun dan mampu menggunakan teknologi.</li>
                                <li>Produk investasi perikanan di INVUYAadalah investasi budidaya ikan per kolam berdasarkan besaran dana yang dibutuhkan untuk melakukan budidaya ikan tersebut hingga masa panen. </li>
                                <li>Satu siklus investasi pada invuya memiliki waktu yang berbeda bergantung dari jenis budidaya ikan yang dipilih investor.</li>
                              </ul>
                          </div>
                          <div class="col-md-6 col-sm-6 align-items-md-center">
                              <ul class="list-featured space-bottom-40">
                                <li>Hasil dari investasi akan diberikan kepada investor setelah 2x24 jam dari masa panen.</li>
                                <li>INVUYA dan petambak ikan tidak memiliki kewajiban untuk mengganti dana investasi dari investor yang digunakan untuk kegiatan budidaya ikan, Akan tetapi INVUYA dan mitra petambak ikan bekerja keras untuk menekan risiko kegagalan hasil budidaya dengan berbagai tindakan preventif dan restrukturisasi investasi.</li>
                                <li>INVUYA tidak menyediakan segala bentuk rekomendasi atau paksaan investasi terkait pilihan-pilihan budidaya dalam situs INVUYA. Kegiatan investasi merupakan secara sadar keputusan investor sendiri.</li>
                              </ul>
                          </div>
                            </div>
                            </div>
                            <div class="mb-60"></div>


                        </div>

          </div>
        </div>
    </div>
    <!-- Content Area End -->
  </div>
  <!-- Page Wrapper End -->

@endsection
