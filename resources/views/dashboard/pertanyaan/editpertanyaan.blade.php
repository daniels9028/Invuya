@extends('backend.lte.main')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit Data Pertanyaan</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item">Edit Data Pertanyaan</li>
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
                <h3 class="card-title">Edit Data Pertanyaan</h3>
              </div>
              @include('errors.form_error_list')
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= route('pertanyaan-update',['id_pertanyaan'=>$pertanyaan->id_pertanyaan]) ?>" method="POST" enctype="multipart/form-data">
	{{csrf_field() }}
	{{method_field('PATCH') }}

  <div class="modal-body">
  <div class="form-group{{$errors->has('pertanyaan') ? 'is-invalid':'is-valid'}}">
    <label class="control-label" for="pertanyaan">Pertanyaan</label>
    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan"  value="<?= $pertanyaan->pertanyaan ?>" >
    @if($errors->has('pertanyaan'))
    <span class="help-block"> {{$errors->first('pertanyaan')}}</span>
    @endif
  </div>
  <br>

  <div class="form-group{{$errors->has('jawaban') ? 'has-error':'has-success'}}">
    <label class="control-label" for="jawaban">Jawaban</label>
    <textarea type="text" class="form-control" rows="5" id="jawaban" name="jawaban" > <?= $pertanyaan->jawaban ?></textarea>
    @if($errors->has('jawaban'))
    <span class="help-block"> {{$errors->first('jawaban')}}</span>
    @endif
  </div>
  <br>
  
 


  <br>
  <br>
  <div class="modal-footer">
<a href="<?= route('pertanyaan-index') ?>" class="btn btn-info">Kembali</a>
  <button type="submit" class="btn btn-success" name="simpan" value="simpan">Simpan</button>
  </div>
</form>
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