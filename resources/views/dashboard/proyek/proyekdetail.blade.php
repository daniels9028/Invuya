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
              <li class="breadcrumb-item">Detail Proyek </li>
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
    <h3 class="box-title"> Detail Proyek </h3>
    
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <tbody>
                <tbody>
    <tr>
      <th scope="row">Nama Proyek</th>
      <td> {{$proyek->nama_proyek}}</td>
    </tr>
    <tr>
      <th scope="row">Nama Petambak</th>
      <td> {{$proyek->petambak->nama}}</td>
    </tr>
    <tr>
      <th scope="row">Total Lot</th>
      <td> {{$proyek->total_lot}}</td>
    </tr>
    <th scope="row">ROI</th>
      <td> {{$proyek->roi}} % </td>
    </tr>
    <th scope="row">Lokasi</th>
      <td> {{$proyek->lokasi}}  </td>
    </tr>
    <th scope="row">Tanggal Mulai Penggalangan</th>
      <td> {{$proyek->tanggal_mulai_p}}</td>
    </tr>
    <th scope="row">Tanggal Selesai Penggalangan</th>
      <td> {{$proyek->tanggal_selesai_p}}</td>
    </tr>
    <th scope="row">Tanggal Selesai Proyek</th>
      <td> {{$proyek->tanggal_selesai}}</td>
    </tr>
    <tr>
      <th scope="row">Gambar</th>
      <td><img src="{{asset('fotoupload/'. $proyek->gambar)}}" height="200px" width="200px"></td>
    </tr>
    <th scope="row">Prospektus</th>
      <td><a href="{{asset('fileupload/'. $proyek->prospektus)}}"download>{{$proyek->prospektus}} </a></td>
    </tr>
    <th scope="row">Proposal Usaha</th>
      <td><a href="{{asset('fileupload/'. $proyek->proposal_usaha)}}"download>{{$proyek->proposal_usaha}} </a></td>
    </tr>
  </tbody>
 </table>

 </div>
 <div class="modal-footer">
<a href="<?= route('proyek-index') ?>" class="btn btn-info">Kembali</a>
 
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