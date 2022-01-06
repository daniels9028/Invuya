<div id="pencarian">
{!! Form::open(['url' => 'pemesanan-index/cari', 'method' => 'GET', 'id' => 'form-pencarian']) !!}
     <div class="row">
         <div class="col-md-2">
             {!! Form::select('status', ['0' => 'Belum Diinfokan', '1' => 'Sudah Diinfokan'], (! empty($gender) ? $gender : null), ['id' => 'status', 'class' => 'form-control', 'placeholder' => '-Status-']) !!}
        </div>

        <div class="col-md-10">
            <div class="input-group">
            {!! Form:: text('kata_kunci', (! empty($kata_kunci)) ? $kata_kunci : null,['class' => 'form-control', 'placeholder' => 'Masukkan Nama Pemesan']) !!}
            <span class="input-group-btn">
            {!! Form::button('Cari', ['class' => 'btn btn-default', 'type' => 'submit']) !!}
            </span>
            </div>
        </div>
    </div>
{!! Form::close() !!}
</div>