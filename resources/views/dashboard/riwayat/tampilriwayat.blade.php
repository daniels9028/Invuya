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
              <li class="breadcrumb-item">Daftar Riwayat Investasi</li>
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
    <h3 class="box-title"> Daftar Riwayat Investasi </h3> <br>
    @include('_partial.flash_message')
    @include('dashboard.riwayat.form_pencarianriw')
    <!-- Large modal -->
<br>
              <h3 class="card-title">Berikut daftar riwayat investasi dalam platform INVUYA</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Proyek</th>
                  <th>Nama Petambak</th>
                  <th>Total Kebutuhan Lot</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($riwayat_list as $proyek): ?>
                <tr>
                  <td><?= $proyek->nama_proyek ?></td>
                  <td><?= $proyek->petambak->nama ?>  </td>
                  <td>
                  <?= $proyek->total_lot ?> Lot
                  </td>
                  <td>
                  <a href="<?= route('riwayat-detail',['id_proyek'=>$proyek->id_proyek]) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Lihat</a>
                </td>
                <?php endforeach; ?>
                </tbody>

              </table>
            <br>
            <div class="table-nav"style="border-top: 1px solid #000;border-bottom: 1px solid #000;">
             <div class="jumlah-data" style="float: left;padding-top: 1px;">
                 <strong> Jumlah Riwayat: {{ $jumlah_riwayat }} </strong>
             </div>
             <div class="paging" style="float: right; text-align: right;padding-top: 1px;padding-left:350px">
                {{ $riwayat_list->links() }}
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
