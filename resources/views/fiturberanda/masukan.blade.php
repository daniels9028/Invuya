@extends('beranda.main')

@section('isi')
<div class="wrapper">
    <!-- Content Area Start -->
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header-title">
              <h3 class="heading-title text-center">Invuya</h3>
            </div>
          </div>
        </div>
        
                              <!--Form-->
                            <hr>

                              <h5 style="text-align:center">Silahkan untuk memberi masukkan</h5>

                              <br>
                            
                                <form style="text-align:center" action="<?= route('masukanstore') ?>" method="POST">
                                 {{csrf_field() }}
                                    <div class="form-group">
                                            <label for="exampleFormControlInput1">Nama</label>
                                          <center><input name="nama" id="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder=""></center>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleFormControlInput1">Email</label>
                                            <center><input name="email" id="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder=""></center>
                                          </div>

                                          <div class="form-group">
                                                <label for="exampleFormControlInput1">Masukkan</label>
                                                <center><textarea name="masukan" id="masukan" type="text" class="form-control" id="exampleFormControlInput1" placeholder=""></textarea></center>
                                              </div>

                                              
                                    <br>
                                    <div class="form-group clearfix">
                                <input type="submit" value="Kirim" class="btn btn-common tombol btn-md pull-right" style="border-radius: 20px;border: 2px solid #008CBA">
                                </div>
                                </form>
                            

  </div>
    </div>
</div>
<!-- Content Area End -->
</div>




@endsection