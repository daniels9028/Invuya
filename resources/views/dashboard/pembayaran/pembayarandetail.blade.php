@extends('backend.lte.main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item">Detail Pembayaran </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    
    <section class="content">
   
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <div class="box-header">
    <h3 class="box-title"> Detail Pembayaran </h3>
    
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <tbody>
                <tbody>
    <tr>
      <th scope="row">Nama Investor</th>
      <td> {{$pembayaran->investasi->investor->nama}}</td>
    </tr>
    <tr>
      <th scope="row">Nama Proyek</th>
      <td> {{$pembayaran->investasi->proyek->nama_proyek}}</td>
    </tr>
    <tr>
      <th scope="row">Total Lot</th>
      <td> {{$pembayaran->investasi->jumlah_lot}}</td>
    </tr>
    <th scope="row">Nama Pemilik Rekening</th>
      <td> {{$pembayaran->nama_pemilik}}</td>
    </tr>
    <th scope="row">Nomor Rekening</th>
      <td> {{$pembayaran->no_rekening}}  </td>
    </tr>
    <th scope="row">Jenis Bank</th>
      <td>  {{$pembayaran->jenis_bank }}</td>
    </tr>
    <tr>
      <th scope="row">Tanggal Pembayaran</th>
      <td> {{$pembayaran->tanggal_bayar}} </td>
    </tr>
    <tr>
      <th scope="row">Status</th>
      <td> <span class="badge {{ ($pembayaran->status_bayar==1)? 'badge-success' :'badge-danger' }}"> {{ $pembayaran->status_bayar==1 ? 'Sudah Diverifikasi' : 'Belum Diverifikasi' }} </span> </td>
    </tr>
    <tr>
      <th scope="row">Bukti Transfer</th>
      <td> <img src="{{asset('fotoupload/'. $pembayaran->bukti_transfer)}}" height="200px" width="200px"> </td>
    </tr>
  </tbody>
 </table>

 </div>
 <div class="modal-footer">
<a href="<?= route('pembayaran-index') ?>" class="btn btn-info">Kembali</a>
 
  </div>
</form>
    </div>
  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection