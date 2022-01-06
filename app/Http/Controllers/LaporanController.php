<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;
use Storage;
use App\laporan;
use App\proyek;
use Session;
use Validator;
use Alert;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan=laporan::ambilSemua();
        $laporan=laporan::orderBy('judul_laporan','asc')->paginate(10);
        $jumlah_laporan=laporan::count();
        return view('dashboard.laporan.tampillaporan',['laporan_list'=>$laporan],['jumlah_laporan'=>$jumlah_laporan]);
    }

	
	public function create()
    {
        $laporan=proyek::ambilSemua();
        return view('dashboard.laporan.tambahlaporan',['laporan_list'=>$laporan]);
    }

    
    public function store(Request $request)
    {
        // Validasi
       
        $validator=$this->validate($request,[
           'judul_laporan'=>'required',
           'file_laporan'=>'required|mimes:pdf',
           'id_proyek'=>'required',
        ]); 
       
        $laporan = new laporan;
        $laporan->judul_laporan= $request->judul_laporan;
        $laporan->id_proyek= $request->id_proyek;
       
         //file_laporan
         if($request->hasFile('file_laporan')){
            $file=$request->file('file_laporan');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fileupload',$filename);
            $laporan->file_laporan=$filename;
        }else{
            return $request;
            $laporan->file_laporan='';
        };
        $laporan->save();

        // Flass message.
        Alert::success('', 'Data Laporan Berhasil Ditambahkan');
        return redirect()->route('laporan-index');     
    }

    public function detail($id_laporan)
    {
        $laporan = laporan::ambil($id_laporan);
        return view('dashboard.laporan.laporandetail',['laporan'=>$laporan]);
    }
    public function destroy($id_laporan)
    {
       $laporan = laporan::find($id_laporan);
       $laporan->delete();
        // Flass message.
        Session::flash('flash_message', 'Data laporan berhasil dihapus.');
        Session::flash('penting',true);

       return redirect()->route('laporan-index');
    }

    public function edit($id_laporan)
    {
        $proyek=proyek::ambilSemua();
        $laporan = laporan::ambil($id_laporan);
        return view('dashboard.laporan.editlaporan',['laporan'=>$laporan],['laporan_list'=>$proyek]);
    }
    
    public function update(Request $request, $id_laporan)
    {
       // Validasi
       
       $validator=$this->validate($request,[
        'judul_laporan'=>'required',
        'file_laporan'=>'required|mimes:pdf',
        'id_proyek'=>'required',
     ]);
   

        $laporan = laporan::ambil($id_laporan);
        $laporan->judul_laporan= $request->judul_laporan;
        $laporan->id_proyek= $request->id_proyek;
       
         //file_laporan
         if($request->hasFile('file_laporan')){
            $file=$request->file('file_laporan');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fileupload',$filename);
            $laporan->file_laporan=$filename;
        }else{
            return $request;
            $laporan->file_laporan='';
        };
        $laporan->save();

        // Flass message.
        Alert::success('', 'Data Laporan Berhasil Diperbaharui');
        return redirect()->route('laporan-index');
        
    }

    public function cari(Request $request) {
        $kata_kunci = trim($request->input('kata_kunci'));

        if (! empty($kata_kunci)) {
            // Query
            $query = laporan::where('judul_laporan', 'LIKE', '%' . $kata_kunci . '%');   
            $laporan_list = $query->paginate(2);

            // URL Links pagination
            $pagination = $laporan_list->appends(['kata_kunci' => $kata_kunci]);

            $jumlah_laporan = $laporan_list->total();
            return view('dashboard.laporan.tampillaporan', compact('laporan_list','kata_kunci', 'pagination', 'jumlah_laporan'));
        }

        return redirect()->route('laporan-index');
    }

    
}
