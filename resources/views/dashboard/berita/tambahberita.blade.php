@extends('backend.lte.main')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Tambah Data Blog</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item">Tambah Data Blog</li>
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
                <h3 class="card-title">Tambah Data Blog</h3>
              </div>
               @include('errors.form_error_list')
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= route('berita-store') ?>" method="post" enctype="multipart/form-data">
    {{csrf_field() }}
    <div class="modal-body">
  <div class="form-group{{$errors->has('judul') ? 'is-invalid':'is-valid'}}">
    <label class="control-label" for="nama">Judul Blog</label>
    <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul')}}" >
    @if($errors->has('judul'))
    <span class="help-block"> {{$errors->first('judul')}}</span>
    @endif
  </div>
  <br>
  <div class="form-group{{$errors->has('gambar') ? 'has-error':'has-success'}}">
    <label class="control-label" for="gambar">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar" value="{{old('gambar')}}">
    @if($errors->has('gambar'))
    <span class="help-block"> {{$errors->first('gambar')}}</span>
    @endif
  </div>
  <br>
  <div class="form-group{{$errors->has('konten') ? 'has-error':'has-success'}}">
    <label class="control-label" for="konten">Isi Blog</label>
    <textarea type="text" class="form-control" rows="5" id="konten" name="konten" >{{old('konten')}}</textarea>
    @if($errors->has('konten'))
    <span class="help-block"> {{$errors->first('konten')}}</span>
    @endif

  <br>
  <div class="modal-footer">
<a href="<?= route('berita-index') ?>" class="btn btn-info">Kembali</a>
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
