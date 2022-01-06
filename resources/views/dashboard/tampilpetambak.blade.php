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
              <li class="breadcrumb-item">Daftar Petambak Ikan</li>
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
            <div>
    <h3 class="box-title"> Daftar Petambak Ikan <a class="btn btn-success btn-sm" id="tambahpetambak"
    title="Tambah" href="<?= route('petambak-create') ?>"> <i class="fa fa-plus"> </i></a></h3>

    
    @include('_partial.flash_message')
    @include('dashboard.form_pencarianptk')
    <!-- Large modal -->
<br>
              <h3 class="card-title">Berikut daftar petambak ikan yang telah bekerja sama dengan INVUYA</h3>
    
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Tanggal Lahir</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($petambak_list as $ptk): ?>
                <tr>
                  <td><?= $ptk->nama ?></td>
                  <td><?= $ptk->alamat ?>
                  </td>
                  <td><?= $ptk->tanggal_lahir ?></td>
                  <td>
                  <a class="btn btn-info btn-sm" href="<?= route('petambak-detail',['id_petambak'=>$ptk->id_petambak]) ?>"><i class="fa fa-eye"></i> Lihat</a>
                 

<!--button-->
<a href=" " class="btn btn-danger btn-sm" data-target="#delete" onclick="deleteData({{$ptk->id_petambak}})" data-toggle="modal"><i class="fa fa-trash"></i> Hapus</a>

<!-- Modal -->
  <!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <form action="" id="deleteForm" method="post">
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
        <button type="submit" class="btn btn-danger" onclick="formSubmit()">iya, Hapus</button>
    </form>

      </div>
    </div>
  </div>
</div>
               <!--button--> 
                   <a href="<?= route('petambak-edit',['id_petambak'=>$ptk->id_petambak]) ?>" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-edit"></i> Edit</a> 
                   <!--Modal-->
                </tr>
                <?php endforeach; ?>
                </tbody>
            
              </table>
<br>
              <div class="table-nav"style="border-top: 1px solid #000;border-bottom: 1px solid #000;">
             <div class="jumlah-data" style="float: left;padding-top: 1px;">
                 <strong> Jumlah Petambak: {{ $jumlah_petambak }} </strong>
             </div>
             <div class="paging" style="float: right; text-align: right;padding-top: 1px;padding-left:350px">
                {{ $petambak_list->links() }}
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