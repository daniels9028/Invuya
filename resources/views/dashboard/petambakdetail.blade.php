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
              <li class="breadcrumb-item">Detail Data Petambak </li>
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
    <h3 class="box-title"> Detail Data Petambak </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <tbody>
                <tbody>
    <tr>
      <th scope="row">Nama</th>
      <td> {{$petambak->nama}}</td>
    </tr>
    <tr>
      <th scope="row">Alamat</th>
      <td> {{$petambak->alamat}}</td>
    </tr>
    <tr>
      <th scope="row">Jenis Kelamin</th>
      <td> @if ($petambak->gender == 'L')
      Laki-Laki
                    @else
                        Perempuan
                    @endif </td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td> {{$petambak->email}}</td>
    </tr>
    <tr>
    <tr>
      <th scope="row">Nomor Telepon</th>
      <td> {{$petambak->no_telp}}</td>
    </tr><tr>
      <th scope="row">Tanggal Lahir</th>
      <td> {{$petambak->tanggal_lahir}}</td>
    </tr>
    <tr>
      <th scope="row">Foto KTP</th>
      <td><img src="{{asset('fotoupload/'. $petambak->foto_ktp)}}" height="200px" width="200px"></td>
    </tr>
  </tbody>
              </table>


            </div>
            <div class="modal-footer">
<a href="<?= route('petambak-index') ?>" class="btn btn-info">Kembali</a>

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
