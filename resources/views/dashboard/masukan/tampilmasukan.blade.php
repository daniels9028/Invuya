@extends('backend.lte.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
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
              <li class="breadcrumb-item">Daftar Masukan Invuya</li>
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
    <h3 class="box-title"> Daftar Masukan Invuya </h3> <br>

    @include('_partial.flash_message')
    @include('dashboard.masukan.form_pencarianmasukan')
    <!-- Large modal -->
<br>
              <h3 class="card-title">Berikut daftar Masukan Invuya dalam platform INVUYA</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Masukan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($masukan_list as $masukan): ?>
                <tr>
                  <td><?= $masukan->nama ?></td>
                  <td style="width:500px"><?= $masukan->masukan ?></td> 
                  <td>
                  <a href="<?= route('masukan-detail',['id_masukan'=>$masukan->id_masukan]) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Lihat</a>


<!--button-->


<!-- Modal -->
   
                            </td>
                </tr>
                <?php endforeach; ?>
                </tbody>

              </table>
            <br>
            <div class="table-nav"style="border-top: 1px solid #000;border-bottom: 1px solid #000;">
             <div class="jumlah-data" style="float: left;padding-top: 1px;">
                 <strong> Jumlah Masukan: {{ $jumlah_masukan }} </strong>
             </div>
             <div class="paging" style="float: right; text-align: right;padding-top: 1px;padding-left:350px">
                {{ $masukan_list->links() }}
            </div>
        </div>
            </div>
            <!-- /.card-body -->

          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
  @endsection
