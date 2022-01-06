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
              <li class="breadcrumb-item">Detail Komoditas </li>
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
    <h3 class="box-title"> Detail Komoditas </h3>
    
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <tbody>
                <tbody>
    <tr>
      <th scope="row">Nama Komoditas</th>
      <td> {{$komoditas->nama_komoditas}}</td>
    </tr>
    <tr>
      <th scope="row">Nama Petambak</th>
      <td> {{$komoditas->petambak->nama}}</td>
    </tr>
    <tr>
      <th scope="row">Harga</th>
      <td>Rp {{$komoditas->harga}}</td>
    </tr>
    <th scope="row">Tipe</th>
      <td> {{$komoditas->tipe}}</td>
    </tr>
    <th scope="row">Berat</th>
      <td> {{$komoditas->ukuran}} gram </td>
    </tr>
    </tr>
    <th scope="row">Minimal Order</th>
      <td> {{$komoditas->min_order}} kg </td>
    </tr>

    <tr>
      <th scope="row">Foto</th>
      <td><img src="{{asset('fotoupload/'. $komoditas->foto)}}" height="200px" width="200px"></td>
    </tr>
  </tbody>
 </table>

 </div>
 <div class="modal-footer">
<a href="<?= route('komoditas-index') ?>" class="btn btn-info">Kembali</a>
 
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