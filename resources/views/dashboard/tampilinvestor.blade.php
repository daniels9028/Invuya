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
              <li class="breadcrumb-item">Daftar Investor</li>
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
    <h3 class="box-title"> Daftar Investor <a class="btn btn-success btn-sm" id="tambahinvestor"
      title="Tambah" href="<?= route('investor-create') ?>"> <i class="fa fa-plus"> </i></a></h3>
    @include('dashboard.form_pencarianinvestor')
    <!-- Large modal -->
<br>
              <h3 class="card-title">Berikut daftar Investor INVUYA</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Tanggal Lahir</th>
                  <th>Nomor Telepon</th>
                  <th>Pekerjaan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($investor_list as $investor): ?>
                <tr>
                  <td><?= $investor->nama ?></td>
                  <td><?= $investor->alamat ?></td>
                  <td><?= $investor->tgl_lahir ?></td>
                  <td><?= $investor->no_telp ?></td>
                  <td><?= $investor->pekerjaan ?></td>
                  <td>
                  <a href="<?= route('investor-detail',['id_investor'=>$investor->id_investor]) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Lihat</a>
                </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
              <br>
              <div class="table-nav"style="border-top: 1px solid #000;border-bottom: 1px solid #000;">
             <div class="jumlah-data" style="float: left;padding-top: 1px;">
                 <strong> Jumlah Investor: {{ $jumlah_investor }} </strong>
             </div>
             <div class="paging" style="float: right; text-align: right;padding-top: 1px;padding-left:350px">
                {{ $investor_list->links() }}
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
