@extends('layouts.master6')

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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Pemesanan </li>
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
    <h3 class="box-title"> Detail Pemesanan </h3>
    
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <tbody>
                <tbody>
    <tr>
      <th scope="row">Nama Pemesan</th>
      <td> {{$pemesanan->nama}}</td>
    </tr>
    <tr>
      <th scope="row">Nomor Telepon</th>
      <td> {{$pemesanan->no_telp}}</td>
    </tr>
    <tr>
      <th scope="row">Kuantitas</th>
      <td> {{$pemesanan->kuantitas}} Kg</td>
    </tr>
    <th scope="row">Lokasi</th>
      <td> {{$pemesanan->lokasi}}</td>
    </tr>
    <th scope="row">Nama Komoditas</th>
      <td> {{$pemesanan->komoditas->nama_komoditas}}  </td>
    </tr>
    <th scope="row">Email Petambak</th>
      <td>  {{$pemesanan->komoditas->petambak->email }}</td>
    </tr>
    <tr>
      <th scope="row">Tanggal Pemesanan</th>
      <td> {{$pemesanan->tanggal_pesan}} </td>
    </tr>
  </tbody>
 </table>

 </div>
 <div class="modal-footer">
<a href="<?= route('pemesanan-index') ?>" class="btn btn-info">Kembali</a>
 
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