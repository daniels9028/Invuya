@extends('beranda.main')

@section('isi')
<div class="wrapper">
        <!-- Content Area Start -->
        <div id="content">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="heading-title text-center">Invuya-Sell</h2>
                </div>
              </div>
            </div>
            <div class="card sell1">
                    <table class="table table-striped">
                      <br>
                        
                            <img class="img-fluid img-thumbnail rounded mx-auto d-block" style="width:350px; height:350px;" src="{{asset('fotoupload/'.$komoditas->foto)}}"alt="Responsive image"  >

                            <br>
                            <br>
                            <h5 style="text-align:center">Spesifikasi</h5>

                            <br>


                                    <tbody>
                                        <tr>
                                            <th scope="row">Nama Komoditas</th>
                                            <td>{{ $komoditas->nama_komoditas }}</td>
                                        </tr>

                                      <tr>
                                        <th scope="row">Harga</th>
                                        <td>Rp.{{ $komoditas->harga }}/Kg</td>
                                      </tr>

                                      <tr>
                                        <th scope="row">Minimal Order</th>
                                        <td>{{ $komoditas->min_order }} Kg</td>
                                      </tr>
                                      <tr>
                                            <th scope="row">Berat</th>
                                            <td>{{ $komoditas->ukuran }} Gram</td>
                                          </tr>
                                          <tr>
                                                <th scope="row">Tipe</th>
                                                <td>{{ $komoditas->tipe }}</td>
                                              </tr>
                                    </tbody>
                                  </table>
                                  </div>
                                  <!--Form-->
                                  <br>
                                  <br>

                                  
      </div>
        </div>
    </div>
    <!-- Content Area End -->
  </div>
  <!-- Page Wrapper End -->
@endsection
