<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
Use Illuminate\Support\Collection;
use Storage;
use App\Proyek;
use App\Petambak;
use Session;
use Validator;
use Response;
use DB;
use PDF;
use Alert;

class ProyekController extends Controller
{
    public function index()
    {
        $proyek=Proyek::ambilSemua();
        $proyek=Proyek::orderBy('nama_proyek','asc')->paginate(10);
        $jumlah_proyek=Proyek::count();
        $now = time();
        return view('dashboard.proyek.tampilproyek',['proyek_list'=>$proyek],['jumlah_proyek'=>$jumlah_proyek],['now'=>$now]);
    }

	
	public function create()
    {
        $proyek=Petambak::ambilSemua();
        return view('dashboard.proyek.tambahproyek',['petambak_list'=>$proyek]);
    }

    public function produk()
    {
        $proyek = Proyek::ambilSemua();
        return view('fiturberanda.proyek',['proyek'=>$proyek]);
    }

    public function isiproduk($id_proyek)
    {
        $proyek = Proyek::ambil($id_proyek);
        return view('fiturberanda.isiproyek',['proyek'=>$proyek]);
    }
    
    public function store(Request $request)
    {
        // Validasi
       
        $validator=$this->validate($request,[
           'nama_proyek'=>'required',
           'total_lot'=>'required',
           'gambar'=>'required|image|mimes:jpeg,jpg,png',
           'prospektus'=>'required|mimes:pdf',
           'roi'=>'required',
           'lokasi'=>'required',
           'tanggal_mulai_p'=>'required|date',
           'tanggal_selesai_p'=>'required|date',
           'tanggal_selesai'=>'required|date',
           'proposal_usaha'=>'required|mimes:pdf',
           'id_petambak'=>'required',
        ]);

        $proyek = new Proyek;
        $proyek->nama_proyek= $request->nama_proyek;
        $proyek->total_lot =$request->total_lot;
        $proyek->roi= $request->roi;
        $proyek->lokasi = $request->lokasi;
        $proyek->tanggal_mulai_p= $request->tanggal_mulai_p;
        $proyek->tanggal_selesai_p=$request->tanggal_selesai_p;
        $proyek->tanggal_selesai=$request->tanggal_selesai;
        $proyek->id_petambak= $request->id_petambak;
        
        //Gambar
        if($request->hasFile('gambar')){
            $file=$request->file('gambar');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fotoupload',$filename);
            $proyek->gambar=$filename;
        }else{
            return $request;
            $proyek->gambar='';
        };

        //Prospektus
        if($request->hasFile('prospektus')){
            $file=$request->file('prospektus');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fileupload',$filename);
            $proyek->prospektus=$filename;
        }else{
            return $request;
            $proyek->prospektus='';
        };

        //proposal usaha
        if($request->hasFile('proposal_usaha')){
            $file=$request->file('proposal_usaha');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fileupload',$filename);
            $proyek->proposal_usaha=$filename;
        }else{
            return $request;
            $proyek->proposal_usaha='';
        };

        $proyek->save();
       
        // Flass message.
        Alert::success('', 'Data Proyek Investasi Berhasil Ditambahkan');
        return redirect()->route('proyek-index');
    }

    public function detail($id_proyek)
    {
        $proyek = Proyek::ambil($id_proyek);
        return view('dashboard.proyek.proyekdetail',['proyek'=>$proyek]);
    }

    public function destroy($id_proyek)
    {
       $proyek = Proyek::find($id_proyek);
       $proyek->delete();
        // Flass message.
        Alert::success('', 'Data Proyek Investasi Berhasil Dihapuskan');

       return redirect()->route('proyek-index');
    }

    public function edit($id_proyek)
    {
        $proyekk=Petambak::ambilSemua();
        $proyek = Proyek::ambil($id_proyek);
        return view('dashboard.proyek.editproyek',['proyek'=>$proyek],['petambak_list'=>$proyekk]);
    }
    
    public function update(Request $request, $id_proyek)
    {
        $validator=$this->validate($request,[
            'nama_proyek'=>'required',
           'total_lot'=>'required|numeric',
           'gambar'=>'required|image|mimes:jpeg,jpg,png',
           'prospektus'=>'required|mimes:pdf',
           'roi'=>'required|numeric',
           'lokasi'=>'required',
           'tanggal_mulai_p'=>'required|date',
           'tanggal_selesai_p'=>'required|date',
           'tanggal_selesai'=>'required|date',
           'proposal_usaha'=>'required|mimes:pdf',
           'id_petambak'=>'required',
         ]);

        $proyek = Proyek::ambil($id_proyek);
        $proyek->nama_proyek= $request->nama_proyek;
        $proyek->total_lot =$request->total_lot;
        $proyek->roi= $request->roi;
        $proyek->lokasi = $request->lokasi;
        $proyek->tanggal_mulai_p= $request->tanggal_mulai_p;
        $proyek->tanggal_selesai_p=$request->tanggal_selesai_p;
        $proyek->tanggal_selesai=$request->tanggal_selesai;
        $proyek->id_petambak= $request->id_petambak;
        
        //Gambar
        if($request->hasFile('gambar')){
            $file=$request->file('gambar');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fotoupload',$filename);
            $proyek->gambar=$filename;
        }else{
            return $request;
            $proyek->gambar='';
        };

        //Prospektus
        if($request->hasFile('prospektus')){
            $file=$request->file('prospektus');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fileupload',$filename);
            $proyek->prospektus=$filename;
        }else{
            return $request;
            $proyek->prospektus='';
        };

        //proposal usaha
        if($request->hasFile('proposal_usaha')){
            $file=$request->file('proposal_usaha');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fileupload',$filename);
            $proyek->proposal_usaha=$filename;
        }else{
            return $request;
            $proyek->proposal_usaha='';
        };

        $proyek->save();
        // Flass message.
        Alert::success('', 'Data Proyek Investasi Berhasil Diperbaharui');
        return redirect()->route('proyek-index');

    }

    public function cari(Request $request) {
        $kata_kunci = trim($request->input('kata_kunci'));

        if (! empty($kata_kunci)) {
            // Query
            $query = proyek::where('nama_proyek', 'LIKE', '%' . $kata_kunci . '%');   
            $proyek_list = $query->paginate(2);

            // URL Links pagination
            $pagination = $proyek_list->appends(['kata_kunci' => $kata_kunci]);

            $jumlah_proyek = $proyek_list->total();
            return view('dashboard.proyek.tampilproyek', compact('proyek_list','kata_kunci', 'pagination', 'jumlah_proyek'));
        }
        return redirect()->route('proyek-index');
    }
    
}
