@extends('beranda.main')

@section('isi')
 <!-- Page Wrapper Start -->
 <div class="wrapper">
    <!--Content Area Start-->
    <div id="content">
      <div class="container">
        <div class="divider-info ptb column-style">
          <div class="page-header-title">
            <h1 class="heading-title text-center">Invuya-Sell</h1>
            <div class="panel-group tabbed">
              <div class="panel pull-right">
                <div class="panel-heading panelku" style="width:300px;height:50px;border: 2px solid #008CBA">
                  <a class="panel-title" data-toggle="collapse" href="#pane2">Silahkan Isi Kuisioner Berikut</a>
                </div>
                <div id="pane2" class="panel-collapse collapse">
                  <div class="panel-body text-gray" style="width:300px;text-align:center;border: 2px solid #008CBA">
                      <a href="https://forms.gle/MBFBTEdvJ3q9uu8aA" style="color:blue">Link</a>  
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
          <br>
            <div class="mb-30">
            <div class="row">
                    <?php foreach ($komoditas as $kom) : ?>
                <div class="col-md-4">
                    <div class="card "style="border-radius: 12px">
                      <img class="card-img-top img-thumbnail" src="{{asset('fotoupload/'.$kom->foto)}}" alt="Responsive image">
                      <div class="card-block">
                        <h3 class="card-title" style="text-align:center;">{{$kom->nama_komoditas}}</h3>
                        <div class="clearfix">
                        <a href="{{ route('pemesanan',['id_komoditas'=>$kom->id_komoditas]) }}" class="btn card-btn btn-common pull-right" style="border-radius: 12px;border: 2px solid #008CBA">Selengkapnya</a>
                      </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
            </div>
        </div>
      </div>


            </div>
        </div>
        <!-- Content Area End -->
      </div>
      <!-- Page Wrapper End -->
@endsection
