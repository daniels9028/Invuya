<div id="pencarian">
{!! Form::open(['url' => 'pembayaran-index/cari', 'method' => 'GET', 'id' => 'form-pencarian']) !!}
     <div class="row">
         <div class="col-md-2">
             {!! Form::select('status_bayar', ['0' => 'Belum Diverifikasi', '1' => 'Sudah Diverifikasi'], (! empty($status_bayar) ? $status_bayar : null), ['id' => 'status_bayar', 'class' => 'form-control', 'placeholder' => '-Status-']) !!}
        </div>

        <div class="col-md-10">
            <div class="input-group">
            {!! Form:: text('kata_kunci', (! empty($kata_kunci)) ? $kata_kunci : null,['class' => 'form-control', 'placeholder' => 'Masukkan Nama Investor']) !!}
            <span class="input-group-btn">
            {!! Form::button('Cari', ['class' => 'btn btn-default', 'type' => 'submit']) !!}
            </span>
            </div>
        </div>
    </div>
{!! Form::close() !!}
</div>