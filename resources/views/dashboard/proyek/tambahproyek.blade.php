@extends('backend.lte.main')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Tambah Data Proyek</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item">Tambah Data Proyek</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Proyek</h3>
              </div>
               @include('errors.form_error_list')
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= route('proyek-store') ?>" method="post" enctype="multipart/form-data">
    {{csrf_field() }}

    <div class="modal-body">
  <div class="form-group{{$errors->has('nama_proyek') ? 'is-invalid':'is-valid'}}">
    <label class="control-label" for="nama_proyek">Nama Proyek</label>
    <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" value="{{old('nama_proyek')}}" >
    @if($errors->has('nama_proyek'))
    <span class="help-block"> {{$errors->first('nama_proyek')}}</span>
    @endif
  </div>
  <br>

  <div class="form-group{{$errors->has('total_lot') ? 'has-error':'has-success'}}">
    <label class="control-label" for="total_lot">Total Lot</label>
    <input type="text" class="form-control" id="total_lot" name="total_lot" value="{{old('total_lot')}}">
    @if($errors->has('total_lot'))
    <span class="help-block"> {{$errors->first('total_lot')}}</span>
    @endif
  </div>
  <br>
  
  <div class="form-group{{$errors->has('id_petambak') ? 'has-error':'has-success'}}">
    <label class="control-label" for="id_petambak">Email Petambak</label>
    <select name="id_petambak" class="form-control" id="id_petambak">
    <option value="{{old('id_petambak')}}">Pilih Email Petambak </option>
    @foreach($petambak_list as $proyek)
    <option value="{{ $proyek->id_petambak }}"> <?= $proyek->email ?> </option> 
    @endforeach
    </select>
    @if($errors->has('id_petambak'))
    <span class="help-block"> {{$errors->first('id_petambak')}}</span>
    @endif
  </div>
  <br>
  <div class="form-group{{$errors->has('lokasi') ? 'has-error':'has-success'}}">
    <label class="control-label" for="lokasi">Lokasi</label> 
    <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{old('lokasi')}}">
    @if($errors->has('lokasi'))
    <span class="help-block"> {{$errors->first('lokasi')}}</span>
    @endif
    </div>
  <br>
  
 <div class="form-group{{$errors->has('roi') ? 'has-error':'has-success'}}">
    <label class="control-label" for="roi">ROI (%) </label> 
    <input type="text" class="form-control" id="roi" name="roi" value="{{old('roi')}}">
    @if($errors->has('roi'))
    <span class="help-block"> {{$errors->first('roi')}}</span>
    @endif
    </div>
  <br>

  <div class="form-group{{$errors->has('gambar') ? 'has-error':'has-success'}}">
    <label class="control-label" for="gambar">Gambar </label> 
    <input type="file" class="form-control" rows="5" id="gambar" name="gambar" value="{{old('gambar')}}">
    @if($errors->has('gambar'))
    <span class="help-block"> {{$errors->first('gambar')}}</span>
    @endif
    </div>
  <br>

  <div class="form-group{{$errors->has('tanggal_mulai_p') ? 'has-error':'has-success'}}">
    <label class="control-label" for="tanggal_mulai_p">Tanggal Mulai Penggalangan </label> 
    <input type="date" class="form-control" id="tanggal_mulai_p" name="tanggal_mulai_p" value="{{old('tanggal_mulai_p')}}">
    @if($errors->has('tanggal_mulai_p'))
    <span class="help-block"> {{$errors->first('tanggal_mulai_p')}}</span>
    @endif
    </div>
  <br>

  <div class="form-group{{$errors->has('tanggal_selesai_p') ? 'has-error':'has-success'}}">
    <label class="control-label" for="tanggal_selesai_p">Tanggal Selesai Penggalangan </label> 
    <input type="date" class="form-control" id="tanggal_selesai_p" name="tanggal_selesai_p" value="{{old('tanggal_selesai_p')}}">
    @if($errors->has('tanggal_selesai_p'))
    <span class="help-block"> {{$errors->first('tanggal_selesai_p')}}</span>
    @endif
    </div>
  <br>

  <div class="form-group{{$errors->has('tanggal_selesai') ? 'has-error':'has-success'}}">
    <label class="control-label" for="tanggal_selesai">Tanggal Selesai Proyek </label> 
    <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="{{old('tanggal_selesai')}}">
    @if($errors->has('tanggal_selesai'))
    <span class="help-block"> {{$errors->first('tanggal_selesai')}}</span>
    @endif
    </div>
  <br>
  
  <div class="form-group{{$errors->has('prospektus') ? 'has-error':'has-success'}}">
    <label class="control-label" for="prospektus">Prospektus </label> 
    <input type="file" class="form-control" rows="5" id="prospektus" name="prospektus" value="{{old('prospektus')}}">
    @if($errors->has('prospektus'))
    <span class="help-block"> {{$errors->first('prospektus')}}</span>
    @endif
    </div>
  <br>

  <div class="form-group{{$errors->has('proposal_usaha') ? 'has-error':'has-success'}}">
    <label class="control-label" for="proposal_usaha">Proposal Usaha </label> 
    <input type="file" class="form-control" rows="5" id="proposal_usaha" name="proposal_usaha" value="{{old('proposal_usaha')}}">
    @if($errors->has('proposal_usaha'))
    <span class="help-block"> {{$errors->first('proposal_usaha')}}</span>
    @endif
    </div>
  <br>


  <br>
  <br>
  <div class="modal-footer">
<a href="<?= route('proyek-index') ?>" class="btn btn-info">Kembali</a>
  <button type="submit" class="btn btn-success" name="simpan" value="simpan">Simpan</button>
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