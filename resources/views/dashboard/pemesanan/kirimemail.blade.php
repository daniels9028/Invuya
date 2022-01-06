@extends('layouts.master3')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Kirim Email</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kirim Email</li>
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
                <h3 class="card-title">Kirim Email</h3>
              </div>
               @include('errors.form_error_list')
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= route('kirimemail') ?>" method="post" enctype="multipart/form-data">
    {{csrf_field() }}
    <div class="modal-body">
  <div class="form-group{{$errors->has('email') ? 'is-invalid':'is-valid'}}">
    <label class="control-label" for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="" >
    @if($errors->has('email'))
    <span class="help-block"> {{$errors->first('email')}}</span>
    @endif
  </div>
  <br>
  <div class="form-group{{$errors->has('name') ? 'has-error':'has-success'}}">
    <label class="control-label" for="name">Name</label>
    <input type="file" class="form-control" id="name" name="name" placeholder="Name" value=" ">
    @if($errors->has('name'))
    <span class="help-block"> {{$errors->first('name')}}</span>
    @endif
  </div>
  <br>
  <div class="form-group{{$errors->has('body') ? 'has-error':'has-success'}}">
    <label class="control-label" for="konten">Email Body</label> 
    <textarea type="text" class="form-control" rows="5" id="body" name="body" placeholder="Enter your message here..." > </textarea>
    @if($errors->has('body'))
    <span class="help-block"> {{$errors->first('body')}}</span>
    @endif
  
  <br>
  <div class="modal-footer">
<a href="<?= route('pemesanan-index') ?>" class="btn btn-info">Kembali</a>
  <button type="submit" class="btn btn-success" name="Edit" value="Edit">Kirim</button>
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