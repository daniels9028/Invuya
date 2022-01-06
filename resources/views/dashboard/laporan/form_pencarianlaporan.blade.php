<div id="pencarian">
{!! Form::open(['url' => 'laporan-index/cari', 'method' => 'GET', 'id' => 'form-pencarian']) !!}
     <div class="row">
        <div class="col-md-12">
            <div class="input-group">
            {!! Form:: text('kata_kunci', (! empty($kata_kunci)) ? $kata_kunci : null,['class' => 'form-control', 'placeholder' => 'Masukkan Judul Laporan']) !!}
            <span class="input-group-btn">
            {!! Form::button('Cari', ['class' => 'btn btn-default', 'type' => 'submit']) !!}
            </span>
            </div>
        </div>
    </div>
{!! Form::close() !!}
</div>