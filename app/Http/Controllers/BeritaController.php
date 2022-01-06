<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\berita;
use Validator;
use Alert;

class BeritaController extends Controller
{
    public function index()
    {
        $berita=berita::ambilSemua();
        $berita=berita::orderBy('judul','asc')->paginate(10);
        $jumlah_berita=berita::count();
        return view('dashboard.berita.tampilberita',['berita_list'=>$berita],['jumlah_berita'=>$jumlah_berita]);
    }
    public function news()
    {
        $berita=Berita::ambilSemua();
        return view('fiturberanda.news',['berita'=>$berita]);
    }

    public function isiberita($id_berita)
    {
        $berita = Berita::ambil($id_berita);
        return view('fiturberanda.isiberita',['berita'=>$berita]);
    }


	public function create()
    {
        return view('dashboard.berita.tambahberita');
    }


    public function store(Request $request)
    {
        // Validasi

        $validator=$this->validate($request,[
           'judul'=>'required',
           'konten'=>'required',
           'gambar'=>'required|image|mimes:jpeg,jpg,png',
        ]);


        $berita = new berita;
        $berita->judul= $request->judul;
        $berita->konten= $request->konten;

        if($request->hasFile('gambar')){
            $file=$request->file('gambar');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fotoupload',$filename);
            $berita->gambar=$filename;
        }else{
            return $request;
            $berita->gambar='';
        }
        $berita->save();
        // Flass message.
        Alert::success('', 'Data Blog Berhasil Ditambahkan');
        return redirect()->route('berita-index');

    }

    public function detail($id_berita)
    {
        $berita = berita::ambil($id_berita);
        return view('dashboard.berita.beritadetail',['berita'=>$berita]);
    }
    public function destroy($id_berita)
    {
       $berita = berita::find($id_berita);
       $berita->delete();
        // Flass message.
        Alert::success('', 'Data Blog Berhasil Dihapuskan');

       return redirect()->route('berita-index');
    }

    public function edit($id_berita)
    {
        $berita = berita::ambil($id_berita);
        return view('dashboard.berita.editberita',['berita'=>$berita]);
    }

    public function update(Request $request, $id_berita)
    {
       // Validasi

       $validator=$this->validate($request,[
        'judul'=>'required',
        'konten'=>'required',
        'gambar'=>'required|image|mimes:jpeg,jpg,png',
     ]);


        $berita = berita::ambil($id_berita);
        $berita->judul= $request->judul;
        $berita->konten= $request->konten;

        if($request->hasFile('gambar')){
            $file=$request->file('gambar');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fotoupload',$filename);
            $berita->gambar=$filename;
        }else{
            return $request;
            $berita->gambar='';
        }
        $berita->save();
        // Flass message.
        Alert::success('', 'Data Blog Berhasil Diperbaharui');
        return redirect()->route('berita-index');

    }

    public function cari(Request $request) {
        $kata_kunci = trim($request->input('kata_kunci'));

        if (! empty($kata_kunci)) {
            // Query
            $query = berita::where('judul', 'LIKE', '%' . $kata_kunci . '%');
            $berita_list = $query->paginate(2);

            // URL Links pagination
            $pagination = $berita_list->appends(['kata_kunci' => $kata_kunci]);

            $jumlah_berita = $berita_list->total();
            return view('dashboard.berita.tampilberita', compact('berita_list','kata_kunci', 'pagination', 'jumlah_berita'));
        }

        return redirect()->route('berita-index');
    }
    

}
