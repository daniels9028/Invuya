<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\KomoditasExport;
use App\Exports\KomoditassExport;
use Maatwebsite\Excel\Facades\Excel;
use Storage;
use App\komoditas;
use App\petambak;
use Session;
use Validator;
use Alert;

class KomoditasController extends Controller
{
    public function index()
    {
        $komoditas=komoditas::ambilSemua();
        $komoditas=komoditas::orderBy('nama_komoditas','asc')->paginate(10);
        $jumlah_komoditas=komoditas::count();
        return view('dashboard.komoditas.tampilkomoditas',['komoditas_list'=>$komoditas],['jumlah_komoditas'=>$jumlah_komoditas]);
    }

	
	public function create()
    {
        $komoditas=petambak::ambilSemua();
        return view('dashboard.komoditas.tambahkomoditas',['petambak_list'=>$komoditas]);
    }

    
    public function store(Request $request)
    {
        // Validasi
       
        $validator=$this->validate($request,[
           'nama_komoditas'=>'required',
           'harga'=>'required',
           'foto'=>'required|image|mimes:jpeg,jpg,png',
           'id_petambak'=>'required',
        ]); 
       
        $komoditas = new Komoditas;
        $komoditas->nama_komoditas= $request->nama_komoditas;
        $komoditas->harga= $request->harga;
        $komoditas->tipe= $request->tipe;
        $komoditas->ukuran= $request->ukuran;
        $komoditas->min_order= $request->min_order;
        $komoditas->id_petambak= $request->id_petambak;
    
        if($request->hasFile('foto')){
            $file=$request->file('foto');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fotoupload',$filename);
            $komoditas->foto=$filename;
        }else{
            return $request;
            $komoditas->foto='';
        }
        $komoditas->save();

        // Flass message.
        Alert::success('', 'Data Komoditas Berhasil Ditambahkan');
        return redirect()->route('komoditas-index');     
    }

    public function detail($id_komoditas)
    {
        $komoditas = komoditas::ambil($id_komoditas);
        return view('dashboard.komoditas.komoditasdetail',['komoditas'=>$komoditas]);
    }
    public function destroy($id_komoditas)
    {
       $komoditas = komoditas::find($id_komoditas);
       $komoditas->delete();
        // Flass message.
        Alert::success('', 'Data Komoditas Berhasil Dihapuskan');

       return redirect()->route('komoditas-index');
    }

    public function edit($id_komoditas)
    {
        $komoditass=petambak::ambilSemua();
        $komoditas = komoditas::ambil($id_komoditas);
        return view('dashboard.komoditas.editkomoditas',['komoditas'=>$komoditas],['petambak_list'=>$komoditass]);
    }
    
    public function update(Request $request, $id_komoditas)
    {
       // Validasi
       
       $validator=$this->validate($request,[
        'nama_komoditas'=>'required',
           'harga'=>'required|numeric',
           'foto'=>'required|image|mimes:jpeg,jpg,png',
           'id_petambak'=>'required',
     ]);
   

        $komoditas = komoditas::ambil($id_komoditas);
        $komoditas->nama_komoditas= $request->nama_komoditas;
        $komoditas->harga= $request->harga;
        $komoditas->tipe= $request->tipe;
        $komoditas->ukuran= $request->ukuran;
        $komoditas->min_order= $request->min_order;
        $komoditas->id_petambak= $request->id_petambak;
       
        if($request->hasFile('foto')){
            $file=$request->file('foto');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fotoupload',$filename);
            $komoditas->foto=$filename;
        }else{
            return $request;
            $komoditas->foto='';
        }
        $komoditas->save();
        // Flass message.
        Alert::success('', 'Data Komoditas Berhasil Diperbaharui');
        return redirect()->route('komoditas-index');
        
    }

    public function cari(Request $request) {
        $kata_kunci = trim($request->input('kata_kunci'));

        if (! empty($kata_kunci)) {
            // Query
            $query = komoditas::where('nama_komoditas', 'LIKE', '%' . $kata_kunci . '%');   
            $komoditas_list = $query->paginate(2);

            // URL Links pagination
            $pagination = $komoditas_list->appends(['kata_kunci' => $kata_kunci]);

            $jumlah_komoditas = $komoditas_list->total();
            return view('dashboard.komoditas.tampilkomoditas', compact('komoditas_list','kata_kunci', 'pagination', 'jumlah_komoditas'));
        }

        return redirect()->route('komoditas-index');
    }    
}
