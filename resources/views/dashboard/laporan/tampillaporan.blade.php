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
              <li class="breadcrumb-item">Daftar Laporan</li>
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
    <h3 class="box-title"> Daftar Laporan <a class="btn btn-success btn-flat btn-sm" id="tambahlaporan"
    title="Tambah" href="<?= route('laporan-create') ?>"> <i class="fa fa-plus"> </i></a></h3>
    <br>
    @include('_partial.flash_message')
    @include('dashboard.laporan.form_pencarianlaporan')
    <!-- Large modal -->
<br>
              <h3 class="card-title">Berikut daftar laporan perkembangan proyek investasi dalam platform INVUYA</h3>
    
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Judul Laporan</th>
                  <th>Nama Proyek</th>
                  <th>File Laporan</th>
                  <th>Tanggal Laporan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($laporan_list as $laporan): ?>
                <tr>
                  <td><?= $laporan->judul_laporan ?></td>
                  <td><?= $laporan->proyek->nama_proyek ?>  </td>
                  <td><a href="{{asset('fileupload/'. $laporan->file_laporan)}}"download> <?= $laporan->file_laporan ?> </a> </td>
                  <td><?= $laporan->tanggal ?></td>
                  <td>
                  <a href="<?= route('laporan-detail',['id_laporan'=>$laporan->id_laporan]) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Lihat</a>

<!--button--> 
               <!--button--> 
                   <a href="<?= route('laporan-edit',['id_laporan'=>$laporan->id_laporan]) ?>" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-edit"></i> Edit</a> 
                   <!--Modal-->
                </tr>
                <?php endforeach; ?>
                </tbody>
            
              </table>
            <br>
            <div class="table-nav"style="border-top: 1px solid #000;border-bottom: 1px solid #000;">
             <div class="jumlah-data" style="float: left;padding-top: 1px;">
                 <strong> Jumlah Laporan: {{ $jumlah_laporan }} </strong>
             </div>
             <div class="paging" style="float: right; text-align: right;padding-top: 1px;padding-left:350px">
                {{ $laporan_list->links() }}
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