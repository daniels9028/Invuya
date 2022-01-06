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
              <li class="breadcrumb-item">Detail Riwayat Investasi </li>
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
    <h3 class="box-title"> Detail Riwayat Investasi </h3>
    
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <tbody>
                <tbody>
    <tr>
      <th scope="row">Nama Proyek</th>
      <td>{{ $proyek->nama_proyek }}</td>
    </tr>
    </tr>
      <th scope="row">Total Kebutuhan Lot</th>
      <td> {{$proyek->total_lot}}</td>
    </tr>
    <tr>
      <th scope="row">Total Kebutuhan Dana</th>
      <td>Rp {{$proyek->total_lot*100000}}</td>
    </tr>
    <tr>
      <th scope="row">Total Lot Terkumpul</th>
      <td>{{ $investasi->sum('jumlah_lot') }} Lot </td>
    </tr>
    <th scope="row">List Investor</th>
      <td>  
      <?php foreach ($investasi as $inv): ?>
      <ul>
      <li>
      {{$inv->investor->nama}} ({{$inv->jumlah_lot}} Lot) 
      </li>
      </ul>
      <?php endforeach; ?>
      </td>
      <tr>
    <th scope="row">List Laporan</th>
      <td>  
      <?php foreach ($laporan as $lap): ?>
      <ul>
      <li>
      {{$lap->judul_laporan}} (<a href="{{asset('fileupload/'. $lap->file_laporan)}}"download> {{ $lap->file_laporan }} </a>) 
      </li>
      </ul>
      <?php endforeach; ?>
      </td>
    </tr>
    <th scope="row">Progress Pendanaan Proyek</th>
      <td> 
    
        <div class="progress" style="height: 20px;">
  <div class="progress-bar bg-default" role="progressbar" style="width:{{ ($investasi->sum('jumlah_lot')/$proyek->total_lot)*100}}%;" aria-valuenow="{{ ($investasi->sum('jumlah_lot')/$proyek->total_lot)*100}}" aria-valuemin="0" aria-valuemax="100">{{(($investasi->sum('jumlah_lot')/$proyek->total_lot)*100) }} % </div>
    </div>
       </td>
    </tr>
    <th scope="row">Status</th>
      <td> 
      @if($investasi->sum('jumlah_lot') < $proyek->total_lot) 
      <span class="badge badge-warning">Proses Penggalangan</span>
                            @else
                            <span class="badge badge-warning">Dana Terpenuhi</span>
                            @endif
      </td>
    </tr>
  </tbody>
 </table>

 </div>
 <div class="modal-footer">
<a href="<?= route('riwayat-index') ?>" class="btn btn-info">Kembali</a>
 
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