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
              <li class="breadcrumb-item">Daftar Pembayaran Proyek Investasi</li>
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
    <h3 class="box-title"> Daftar Pembayaran Proyek Investasi </h3> <br>

    @include('_partial.flash_message')
    @include('dashboard.pembayaran.form_pencarianpem')
    <!-- Large modal -->
<br>
              <h3 class="card-title">Berikut daftar pembayaran proyek investasi dalam platform INVUYA</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Investor</th>
                  <th>Nama Proyek</th>
                  <th>Total Lot</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($pembayaran_list as $pembayaran): ?>
                <tr>
                  <td><?= $pembayaran->investasi->investor->nama ?></td>
                  <td><?= $pembayaran->investasi->proyek->nama_proyek ?></td>
                  <td><?= $pembayaran->investasi->jumlah_lot ?></td>
                  <td><span class="badge {{ ($pembayaran->status_bayar==1)? 'badge-success' :'badge-danger' }}"> {{ $pembayaran->status_bayar==1 ? 'Sudah Diverifikasi' : 'Belum Diverifikasi' }} </span></td>
                  <td>
                  <a href="<?= route('pembayaran-detail',['id_pembayaran'=>$pembayaran->id_pembayaran]) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Lihat</a>


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

                <form action="<?= route('pembayaran-delete',['id_pembayaran'=>$pembayaran->id_pembayaran]) ?>" method="POST" >
                  {{csrf_field() }}
                 {{method_field('DELETE') }}
                 <div class="modal-body">
                 <p class="text-center">
                  Apakah anda yakin ingin menghapus data ini?
                 </p>
                  <input type="hidden" name="id_pembayaran" id="id" value="">

                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak, Batalkan</button>
                   <button type="submit" class="btn btn-danger">iya, Hapus</button>
                  </div>
               </div>
                </form>
          </div>
    </div>

    @if($pembayaran->status_bayar==0)
    <a href="{{url('pembayaran-index/status/'.$pembayaran->id_pembayaran) }}" class="btn btn-warning btn-sm"><i class="fa fa-envelope"></i> Verifikasikan </a>
                            @else
                            <a href=" " class="btn btn-success btn-sm"><i class="fa fa-check"></i> Terverifikasi </a>
                            @endif
                            </td>
                </tr>
                <?php endforeach; ?>
                </tbody>

              </table>
            <br>
            <div class="table-nav"style="border-top: 1px solid #000;border-bottom: 1px solid #000;">
             <div class="jumlah-data" style="float: left;padding-top: 1px;">
                 <strong> Jumlah Pembayaran: {{ $jumlah_pembayaran }} </strong>
             </div>
             <div class="paging" style="float: right; text-align: right;padding-top: 1px;padding-left:350px">
                {{ $pembayaran_list->links() }}
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
