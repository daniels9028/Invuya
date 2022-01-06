@extends('beranda.main')

@section('isi')
<div class="wrapper">
    <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="card" style="">
              <div class="card-header" style="margin-top:100px;text-align:center;height:100px"><h2 style="margin-top:25px">Terima Kasih</h2></div>
              <br>
              <div class="card-body clearfix" style="text-align:center"><h3>{{$pemesanan->nama }} telah melakukan pemesanan ini</h3>
              <a href="{{route('sell')}}" class="btn btn-common pull-right btn-md" style="margin-bottom:10px;border-radius:12px;margin-right:10px">Penjualan</a>
              </div>
          </div>
</div>
      </div>
        </div>
    </div>
    <!-- Content Area End -->
  </div>
@endsection
