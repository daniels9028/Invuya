@extends('backend.lte.main')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit Data Berita</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item">Edit Data Laporan</li>
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
                <h3 class="card-title">Edit Data Laporan</h3>
              </div>
              @include('errors.form_error_list')
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= route('laporan-update',['id_laporan'=>$laporan->id_laporan]) ?>" method="POST" enctype="multipart/form-data">
	{{csrf_field() }}
	{{method_field('PATCH') }}
    <div class="modal-body">
  <div class="form-group{{$errors->has('judul_laporan') ? 'is-invalid':'is-valid'}}">
    <label class="control-label" for="judul_laporan">Judul Laporan</label>
    <input type="text" class="form-control" id="judul_laporan" name="judul_laporan" value="<?= $laporan->judul_laporan ?>">
    @if($errors->has('judul_laporan'))
    <span class="help-block"> {{$errors->first('judul_laporan')}}</span>
    @endif
  </div>
  <br>

  <div class="form-group{{$errors->has('file_laporan') ? 'has-error':'has-success'}}">
    <label class="control-label" for="file_laporan">File Laporan</label>
    <input type="file" class="form-control" id="file_laporan" name="file_laporan" value="<?= $laporan->file_laporan ?>">
    @if($errors->has('file_laporan'))
    <span class="help-block"> {{$errors->first('file_laporan')}}</span>
    @endif
  </div>
  <br>
  
  <div class="form-group{{$errors->has('id_proyek') ? 'has-error':'has-success'}}">
    <label class="control-label" for="id_petambak">Nama Proyek</label>
    <select name="id_proyek" class="form-control" id="id_proyek">
    <option value="<?= $laporan->id_proyek ?>">Pilih Nama Proyek </option>
    @foreach($laporan_list as $laporan)
    <option value="{{ $laporan->id_proyek }}"> <?= $laporan->nama_proyek ?> </option> 
    @endforeach
    </select>
    @if($errors->has('id_proyek'))
    <span class="help-block"> {{$errors->first('id_proyek')}}</span>
    @endif
  </div>
  <br>
  <br>
  <div class="modal-footer">
<a href="<?= route('laporan-index') ?>" class="btn btn-info">Kembali</a>
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