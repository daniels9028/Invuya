@extends('beranda.main')

@section('isi')

<div class="blog-block post-content-area" style="margin: 30px 50px;">
    <div class="text-center">
        <img src="{{asset('fotoupload/'. $berita->gambar)}}" class="rounded mx-auto d-block" alt="Responsive image" style="width:500px;height:250px">
    </div>
        <div class="blog-post ">
            <div class="text-center">
             <h3><{{ $berita->judul }}</h3>
              <p>{{ $berita->tanggal }}</p>
            </div>
        <p style="word-wrap:break-word;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $berita->konten }}</p>
        </div>
      </div>
      <div class="mb-60"></div>
    </div>
{{-- <div class="container isiberita">
     <br>
 <div class="card" style="border-radius:12px">
        <br>
        <h3 class="mt-100 text-center tulisan">{{ $berita->judul }}</h3>
        <br>
        <img src="{{asset('fotoupload/'. $berita->gambar)}}" class="rounded mx-auto d-block" alt="Responsive image" style="width:500px;height:250px">
        <br>
        <p class="text-center">{{ $berita->tanggal }}</p>
    <br>
    <p>
    {{$berita->konten }}
    </p>
</div>
</div>
<br>
<br> --}}


@endsection
