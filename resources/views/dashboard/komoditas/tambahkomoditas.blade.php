@extends('backend.lte.main')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Tambah Data Komoditas</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item">Tambah Data Komoditas</li>
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
                <h3 class="card-title">Tambah Data Komoditas</h3>
              </div>
               @include('errors.form_error_list')
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= route('komoditas-store') ?>" method="post" enctype="multipart/form-data">
    {{csrf_field() }}
    <div class="modal-body">
  <div class="form-group{{$errors->has('nama_komoditas') ? 'is-invalid':'is-valid'}}">
    <label class="control-label" for="nama_komoditas">Nama Komoditas</label>
    <input type="text" class="form-control" id="nama_komoditas" name="nama_komoditas" value="{{old('nama_komoditas')}}" >
    @if($errors->has('nama_komoditas'))
    <span class="help-block"> {{$errors->first('nama_komoditas')}}</span>
    @endif
  </div>
  <br>

  <div class="form-group{{$errors->has('harga') ? 'has-error':'has-success'}}">
    <label class="control-label" for="harga">Harga (/Kg)</label>
    <input type="text" class="form-control" id="harga" name="harga" value="{{old('harga')}}">
    @if($errors->has('harga'))
    <span class="help-block"> {{$errors->first('harga')}}</span>
    @endif
  </div>
  <br>
  
  <div class="form-group{{$errors->has('id_petambak') ? 'has-error':'has-success'}}">
    <label class="control-label" for="id_petambak">Email Petambak</label>
    <select name="id_petambak" class="form-control" id="id_petambak">
    <option value="">Pilih Email Petambak </option>
    @foreach($petambak_list as $komoditas)
    <option value="{{ $komoditas->id_petambak }}"> <?= $komoditas->email ?> </option> 
    @endforeach
    </select>
    @if($errors->has('id_petambak'))
    <span class="help-block"> {{$errors->first('id_petambak')}}</span>
    @endif
  </div>
  <br>

  <div class="form-group{{$errors->has('tipe') ? 'has-error':'has-success'}}">
    <label class="control-label" for="tipe">Tipe</label> 
    <input type="text" class="form-control" id="tipe" name="tipe" value="{{old('tipe')}}">
    @if($errors->has('tipe'))
    <span class="help-block"> {{$errors->first('tipe')}}</span>
    @endif
    </div>
  <br>
 <div class="form-group{{$errors->has('ukuran') ? 'has-error':'has-success'}}">
    <label class="control-label" for="ukuran">Berat (/gram) </label> 
    <input type="text" class="form-control" id="ukuran" name="ukuran" value="{{old('ukuran')}}">
    @if($errors->has('ukuran'))
    <span class="help-block"> {{$errors->first('ukuran')}}</span>
    @endif
    </div>
  <br>
  <div class="form-group{{$errors->has('min_order') ? 'has-error':'has-success'}}">
    <label class="control-label" for="tipe">Minimal Order (/kg)</label> 
    <input type="text" class="form-control" id="min_order" name="min_order" value="{{old('min_order')}}">
    @if($errors->has('min_order'))
    <span class="help-block"> {{$errors->first('min_order')}}</span>
    @endif
    </div>
  <br>

  <div class="form-group{{$errors->has('foto') ? 'has-error':'has-success'}}">
    <label class="control-label" for="foto">Gambar </label> 
    <input type="file" class="form-control" rows="5" id="foto" name="foto" value="{{old('foto')}}">
    @if($errors->has('foto'))
    <span class="help-block"> {{$errors->first('foto')}}</span>
    @endif
    </div>
  <br>
  
  <br>
  <br>
  <div class="modal-footer">
<a href="<?= route('komoditas-index') ?>" class="btn btn-info">Kembali</a>
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