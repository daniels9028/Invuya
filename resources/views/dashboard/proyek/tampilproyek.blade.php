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
              <li class="breadcrumb-item">Daftar Proyek Investasi</li>
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
    <h3 class="box-title"> Daftar Proyek Investasi <a class="btn btn-success btn-sm" id="tambahproyek"
    title="Tambah" href="<?= route('proyek-create') ?>"> <i class="fa fa-plus"> </i></a></h3>
   
    @include('_partial.flash_message')
    @include('dashboard.proyek.form_pencarianproyek')
    <!-- Large modal -->
<br>
              <h3 class="card-title">Berikut daftar proyek investasi dalam platform INVUYA</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width:200px">Nama Proyek</th>
                  <th>Nama Petambak</th>
                  <th>Lokasi</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($proyek_list as $proyek): ?>
                <tr>
                  <td><?= $proyek->nama_proyek ?></td>
                  <td><?= $proyek->petambak->nama ?>  </td>
                  <td><?= $proyek->lokasi ?></td>
                  <td>
                  @if(strtotime($proyek->tanggal_mulai_p) > time())
                    <span class="badge badge-dark">Belum Dimulai</span>
                  @endif
                  @if(strtotime($proyek->tanggal_mulai_p) < time() && strtotime($proyek->tanggal_selesai_p) > time())
                    <span class="badge badge-warning">Masa Penggalangan</span>
                  @endif
                  @if(strtotime($proyek->tanggal_selesai_p) < time() && strtotime($proyek->tanggal_selesai) > time())
                   <span class="badge badge-primary">Proyek Berjalan</span>
                   @endif
                  @if(strtotime($proyek->tanggal_selesai) <  time())
                  <span class="badge badge-success">Proyek Selesai</span>
                  @endif
              </td>

                  <td>
                  <a href="<?= route('proyek-detail',['id_proyek'=>$proyek->id_proyek]) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Lihat</a>

<!--button-->
<a href=" " class="btn btn-danger btn-sm" data-target="#delete1" onclick="deleteData1({{$proyek->id_proyek}})" data-toggle="modal"><i class="fa fa-trash"></i> Hapus</a>

<!-- Modal -->
  <!-- Modal -->
<div class="modal fade" id="delete1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <form action="" id="deleteForm1" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penghapusan</h5>
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}
        {{ method_field('DELETE')}}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p class="text-center">
              Apakah anda yakin ingin menghapus data ini?
             </p>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak, Batalkan</button>
        <button type="submit" class="btn btn-danger" onclick="formSubmit1()">iya, Hapus</button>
    </form>

      </div>
    </div>
  </div>
</div>
               <!--button-->
                   <a href="<?= route('proyek-edit',['id_proyek'=>$proyek->id_proyek]) ?>" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-edit"></i> Edit</a>
                   <!--Modal-->
                </tr>
                <?php endforeach; ?>
                </tbody>

              </table>
            <br>
            <div class="table-nav"style="border-top: 1px solid #000;border-bottom: 1px solid #000;">
             <div class="jumlah-data" style="float: left;padding-top: 1px;">
                 <strong> Jumlah Proyek: {{ $jumlah_proyek }} </strong>
             </div>
             <div class="paging" style="float: right; text-align: right;padding-top: 1px;padding-left:350px">
                {{ $proyek_list->links() }}
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