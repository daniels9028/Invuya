@extends('backend.lte.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Profile</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item">Profil Admin</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                           src="{{ asset(auth()->user()->image) }}"
                           alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>

                    <p class="text-muted text-center">INVUYA Owner</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        @foreach ($personal as $per)

                      {{-- <li class="list-group-item">
                        <b>Tanggal Lahir</b> <a class="float-right">{{auth()->user()->tgl_lahir}}</a>
                      </li> --}}
                      <li class="list-group-item">
                        <b>Jenis Kelamin</b> <a class="float-right">{{$per->gender}}</a>
                      </li>
                    </ul>

                    <a href ="{{route('beranda')}}" class="btn btn-primary btn-block"><b>Website</b></a>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Tentang {{auth()->user()->name}}</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Pendidikan</strong>

                    <p class="text-muted">
                            {{$per->pendidikan}}
                    </p>

                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                    <p class="text-muted">{{$per->alamat}}</p>

                    <hr>

                    <strong><i class="fas fa-phone-alt mr-1"></i> No Telepon</strong>

                    <p class="text-muted">
                            {{$per->no_telp}}
                    </p>

                    <hr>

                    <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                    <p class="text-muted">
                            {{$per->email}}
                    </p>

                    <hr>

                    <strong><i class="far fa-file-alt mr-1"></i> Biodata Singkat</strong>

                    <p class="text-muted">{{$per->biodata}}</p>
                  </div>
                  <!-- /.card-body -->

                  @endforeach

                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <div class="card">
                  <div class="card-header p-2 text-center">Pengaturan Profil</div>
                  <!-- /.card-header -->
                  <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                     <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">×</span>
                               </button>
                                   <ul>
                                 @foreach ($errors->all() as $error)
                                     <li>
                                  {{ $error }}
                                    </li>
                           @endforeach
                          </ul>
                    </div>
                     @endif
                     <form action="{{ route('admin.update') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                      <div class="tab-pane">
                        <form class="form-horizontal">
                          <div class="form-group row">
                            <label for="ame" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name', auth()->user()->name) }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" id="email" type="text" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}">
                            </div>
                          </div>
                          {{-- <div class="form-group row">
                            <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                              <input id="tgl_lahir" type="date" class="form-control" name="tanggal_lahir" value="{{ old('tgl_lahir', auth()->user()->tgl_lahir) }}">
                            </div>
                          </div> --}}
                          <div class="form-group row">
                            <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select name="gender" class="form-control" id="gender">
                                    <option  value="{{ old('gender', auth()->user()->gender) }}" >Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki"> Laki-Laki </option>
                                    <option value="Perempuan"> Perempuan </option>
                                    </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                              <textarea name="alamat" class="form-control">{{ old('alamat', auth()->user()->alamat) }}</textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                                <label for="no_telp" class="col-sm-2 col-form-label">No. Telepon</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ old('no_telp', auth()->user()->no_telp) }}">
                                </div>
                              </div>
                          <div class="form-group row">
                            <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="{{ old('pendidikan', auth()->user()->pendidikan) }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="biodata" class="col-sm-2 col-form-label">Biodata</label>
                            <div class="col-sm-10">
                              <textarea type="text" class="form-control" id="biodata" name="biodata">{{ old('biodata', auth()->user()->biodata) }}</textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="foto_profil" class="col-sm-2 col-form-label">Foto Profil</label>
                                <div class="input-group col-sm-10">
                                      <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto_profil" name="foto_profil">
                                    <label class="custom-file-label" for="foto_profil"></label>
                                        </div>
                                        <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                          </div>
                          </div>
                          <div class="mb-60">&nbsp;</div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-success float-right">Perbaharui</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

  </div>

@endsection
