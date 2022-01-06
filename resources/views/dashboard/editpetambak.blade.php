@extends('backend.lte.main')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit Data Petambak</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item">Edit Data Petambak</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data Petambak</h3>
              </div>
              @include('errors.form_error_list')
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= route('petambak-update',['id_petambak'=>$petambak->id_petambak]) ?>" method="POST" enctype="multipart/form-data">
	{{csrf_field() }}
	{{method_field('PATCH') }}
    <div class="modal-body">
  <div class="form-group">
    <label class="control-label" for="nama">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama" name="nama"  value="<?= $petambak->nama?>">
    @if($errors->has('nama'))
    <span class="help-block"> {{$errors->first('nama')}}</span>
    @endif
  </div>
  <br>
  <div class="form-group {{$errors->has('alamat') ? 'has-error':'has-success'}}">
    <label class="control-label" for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat"  value="<?= $petambak->alamat?>">
    @if($errors->has('alamat'))
    <span class="help-block"> {{$errors->first('alamat')}}</span>
    @endif
  </div>
  <br>
  <div class="form-group{{$errors->has('gender') ? 'has-error':'has-success'}}">
    <label class="control-label" for="gender">Jenis Kelamin</label>
    <select name="gender" class="form-control" id="gender">
    <option value="<?= $petambak->gender?>">Pilih Jenis Kelamin </option>
    <option value="L"> Laki-Laki </option>
    <option value="P"> Perempuan </option>
    </select>
    @if($errors->has('gender'))
    <span class="help-block"> {{$errors->first('gender')}}</span>
    @endif
  </div>
  <br>
  <div class="form-group {{$errors->has('no_telp') ? 'has-error':'has-success'}}">
    <label class="control-label" for="no_telp">Nomor Telepon</label>
    <input type="number" class="form-control" id="no_telp" name="no_telp"  value="<?= $petambak->no_telp?>">
    @if($errors->has('no_telp'))
    <span class="help-block"> {{$errors->first('no_telp')}}</span>
    @endif
  </div>
  <br>
  <div class="form-group {{$errors->has('email') ? 'has-error':'has-success'}}">
    <label class="control-label" for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email"  value="<?= $petambak->email?>">
    @if($errors->has('email'))
    <span class="help-block"> {{$errors->first('email')}}</span>
    @endif
  </div>
  <br>
  <div class="form-group {{$errors->has('tanggal_lahir') ? 'has-error':'has-success'}}">
    <label class="control-label" for="tanggal_lahir">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"  value="<?= $petambak->tanggal_lahir?>">
    @if($errors->has('tanggal_lahir'))
    <span class="help-block"> {{$errors->first('tanggal_lahir')}}</span>
    @endif
  </div>
  <br>
  <div class="form-group {{$errors->has('foto_ktp') ? 'has-error':'has-success'}}">
   <label class="control-label" for="foto_ktp">Foto KTP</label>
    <input type="file" class="form-control" id="foto_ktp" name="foto_ktp"  value="<?= $petambak->foto_ktp ?>">
    @if($errors->has('foto_ktp'))
    <span class="help-block"> {{$errors->first('foto_ktp')}}</span>
    @endif
  </div>
  <br>
    <img src="{{asset('fotoupload/'. $petambak->foto_ktp)}}" height="200px" width="200px">
<div class="modal-footer">
<a href="<?= route('petambak-index') ?>" class="btn btn-info">Kembali</a>
  <button type="submit" class="btn btn-success" name="Edit" value="Edit">Simpan</button>
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
