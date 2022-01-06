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
              <li class="breadcrumb-item">Detail Laporan </li>
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
    <h3 class="box-title"> Detail Laporan </h3>
    
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <tbody>
                <tbody>
    <tr>
      <th scope="row">Judul Laporan</th>
      <td> {{$laporan->judul_laporan}}</td>
    </tr>
    <tr>
      <th scope="row">Nama Proyek</th>
      <td> {{$laporan->proyek->nama_proyek}}</td>
    </tr>
    <tr>
      <th scope="row">Nama Petambak</th>
      <td> {{$laporan->proyek->petambak->nama}}</td>
    </tr>
    <th scope="row">Email Petambak</th>
      <td>  {{$laporan->proyek->petambak->email}}</td>
    </tr>
    <th scope="row">File Laporan</th>
      <td> <a href="{{asset('fileupload/'. $laporan->file_laporan)}}"download>{{ $laporan->file_laporan }} </a> </td>
    </tr>
  </tbody>
 </table>

 </div>
 <div class="modal-footer">
<a href="<?= route('laporan-index') ?>" class="btn btn-info">Kembali</a>
 
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