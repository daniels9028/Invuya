@extends('layouts.master')

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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Pemesanan</li>
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
    <h3 class="box-title"> Daftar Pemesanan </h3> <br>

    @include('_partial.flash_message')
    @include('dashboard.pemesanan.form_pencarianpem')
    <!-- Large modal -->
<br>
              <h3 class="card-title">Berikut daftar pemesanan komoditas yang dipasarkan dalam platform INVUYA</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Pemesan</th>
                  <th>Kuantitas</th>
                  <th>Nama Komoditas</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($pemesanan_list as $pemesanan): ?>
                <tr>
                  <td><?= $pemesanan->nama ?></td>
                  <td><?= $pemesanan->kuantitas?> Kg  </td>
                  <td><?= $pemesanan->komoditas->nama_komoditas?>  </td>
                  <td><span class="badge {{ ($pemesanan->status==1)? 'badge-success' :'badge-danger' }}"> {{ $pemesanan->status==1 ? 'Sudah Diinfokan' : 'Belum Diinfokan' }} </span></td>
                  <td>
                  <a href="<?= route('pemesanan-detail',['id_pemesanan'=>$pemesanan->id_pemesanan]) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Lihat</a>


<!--button-->
<a href="" class="btn btn-danger btn-sm"data-target="#delete" data-toggle="modal"><i class="fa fa-trash"></i> Hapus</a>

<!-- Modal -->
   <div class="modal modal fade" id="delete" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel">Konfirmasi Penghapusan</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
            </button>
                </div>

                <form action="<?= route('pemesanan-delete',['id_pemesanan'=>$pemesanan->id_pemesanan]) ?>" method="POST" >
                  {{csrf_field() }}
                 {{method_field('DELETE') }}
                 <div class="modal-body">
                 <p class="text-center">
                  Apakah anda yakin ingin menghapus data ini?
                 </p>
                  <input type="hidden" name="id_pemesanan" id="id" value="">

                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak, Batalkan</button>
                   <button type="submit" class="btn btn-danger">iya, Hapus</button>
                  </div>
               </div>
                </form>
          </div>
    </div>

    @if($pemesanan->status==0)
    <a href="{{url('pemesanan-index/status/'.$pemesanan->id_pemesanan) }}" class="btn btn-warning btn-sm"><i class="fa fa-envelope"></i> Infokan </a>
                            @else
                            <a href=" " class="btn btn-success btn-sm"><i class="fa fa-check"></i> Sudah Diinfokan </a>
                            @endif
                            </td>
                </tr>
                <?php endforeach; ?>
                </tbody>

              </table>
            <br>
            <div class="table-nav"style="border-top: 1px solid #000;border-bottom: 1px solid #000;">
             <div class="jumlah-data" style="float: left;padding-top: 1px;">
                 <strong> Jumlah Pemesanan: {{ $jumlah_pemesanan }} </strong>
             </div>
             <div class="paging" style="float: right; text-align: right;padding-top: 1px;padding-left:350px">
                {{ $pemesanan_list->links() }}
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
