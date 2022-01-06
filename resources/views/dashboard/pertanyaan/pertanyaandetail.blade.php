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
              <li class="breadcrumb-item">Detail Pertanyaan </li>
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
    <h3 class="box-title"> Detail Pertanyaan </h3>
    
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
              <table id="example2" class="table table-bordered table-hover">
                <tbody>
    <tr>
      <th scope="column">Pertanyaan</th>
      <td> {{$pertanyaan->pertanyaan}}</td>
    </tr>
    <tr>
      <th scope="column">Jawaban</th>
      <td> {{$pertanyaan->jawaban}}</td>
    </tr>
    
    <tr>
  </tbody>
 </table>
</div>
 </div>
 <div class="modal-footer">
<a href="<?= route('pertanyaan-index') ?>" class="btn btn-info">Kembali</a>
 
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