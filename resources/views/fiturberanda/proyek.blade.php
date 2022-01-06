@extends('beranda.main')

@section('isi')
<!-- Page Wrapper Start -->
<div class="wrapper">
  <!--Content Area Start-->
  <div id="content">
    <div class="container">
      <div class="divider-info ptb column-style">
        <div class="page-header-title">
          <h1 class="heading-title text-center">Invuya-Proyek</h1>
        </div>

          <div class="mb-30">
          <div class="row">
                  <?php foreach ($proyek as $pro) : ?>
              <div class="col-md-4">
                  <div class="card "style="border-radius: 12px">
                    <img class="card-img-top img-thumbnail" src="{{asset('fotoupload/'.$pro->gambar)}}" alt="Responsive image">
                    <div class="card-block" >
                      <br>

                      <table class="table table-stripped">
                      <tbody>
                          <tr>
                              <th scope="row">Nama Proyek</th>
                              <td style="height:120px">{{ $pro->nama_proyek }}</td>
                          </tr>

                        <tr>
                          <th scope="row">ROI</th>
                          <td>{{ $pro->roi }} %</td>
                        </tr>

                        <tr>
                          <th scope="row">Lokasi</th>
                          <td style="height:80px">{{ $pro->lokasi }}</td>
                        </tr>
                        <tr>
                              <th scope="row">Tanggal Mulai Penggalangan</th>
                              <td>{{ $pro->tanggal_mulai_p }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Selesai Penggalangan</th>
                                <td>{{ $pro->tanggal_selesai_p }}</td>
                            </tr>

                            <tr>
                              <th scope="row">Tanggal Selesai Proyek</th>
                              <td>{{ $pro->tanggal_selesai }}</td>
                          </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
          </div>
      </div>
    </div>


          </div>
      </div>
      <!-- Content Area End -->
    </div>

@endsection