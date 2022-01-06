<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PetambakExport;
use App\Exports\PetambakkExport;
use Maatwebsite\Excel\Facades\Excel;
use Storage;
use App\Petambak;
use Session;
use Validator;
use PDF;
use Alert;

class PetambakController extends Controller
{
    public function index()
    {
        $petambak=Petambak::ambilSemua();
        $petambak=Petambak::orderBy('nama','asc')->paginate(10);
        $jumlah_petambak=Petambak::count();
        return view('dashboard.tampilpetambak',['petambak_list'=>$petambak],['jumlah_petambak'=>$jumlah_petambak]);
    }

	
	public function create()
    {
        return view('dashboard.tambahpetambak');
    }

    
    public function store(Request $request)
    {
        // Validasi
       
        $validator=$this->validate($request,[
           'nama'=>'required',
           'gender'=>'required|in:L,P',
           'alamat'=>'required',
           'no_telp'=>'required',
           'tanggal_lahir'=>'required|date',
           'foto_ktp'=>'required|image|mimes:jpeg,jpg,png',
           'email'=>'required|email|unique:petambak',
        ]);
      
       
        $petambak = new Petambak;
        $petambak->nama= $request->nama;
        $petambak->gender =$request->gender;
        $petambak->alamat= $request->alamat;
        $petambak->email = $request->email;
        $petambak->no_telp= $request->no_telp;
        $petambak->tanggal_lahir=$request->tanggal_lahir;
       
        if($request->hasFile('foto_ktp')){
            $file=$request->file('foto_ktp');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fotoupload',$filename);
            $petambak->foto_ktp=$filename;
        }else{
            return $request;
            $petambak->foto_ktp='';
        }
        $petambak->save();
       
        // Flass message.
        Alert::success('', 'Data Petambak Berhasil Ditambahkan');
        return redirect()->route('petambak-index');
    }

    public function detail($id_petambak)
    {
        $petambak = Petambak::ambil($id_petambak);
        return view('dashboard.petambakdetail',['petambak'=>$petambak]);
    }
    public function destroy($id_petambak)
    {
       $petambak = Petambak::find($id_petambak);
       $petambak->delete();
        // Flass message.
        Alert::success('', 'Data Petambak Berhasil Dihapuskan');

       return redirect()->route('petambak-index');
    }

    public function edit($id_petambak)
    {
        $petambak = Petambak::ambil($id_petambak);
        return view('dashboard.editpetambak',['petambak'=>$petambak]);
    }
    
    public function update(Request $request, $id_petambak)
    {
        $validator=$this->validate($request,[
            'nama'=>'required',
            'gender'=>'required|in:L,P',
            'alamat'=>'required',
            'no_telp'=>'required',
            'tanggal_lahir'=>'required|date',
            'foto_ktp'=>'required|image|mimes:jpeg,jpg,png',
            'email'=>'required|email',
         ]);

        $petambak = Petambak::ambil($id_petambak);
        $petambak->nama= $request->nama;
        $petambak->gender =$request->gender;
        $petambak->alamat= $request->alamat;
        $petambak->no_telp= $request->no_telp;
        $petambak->tanggal_lahir=$request->tanggal_lahir;
       
        if($request->hasFile('foto_ktp')){
            $file=$request->file('foto_ktp');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fotoupload',$filename);
            $petambak->foto_ktp=$filename;
        }else{
            return $request;
            $petambak->foto_ktp='';
        }
        $petambak->save();

        // Flass message.
        Alert::success('', 'Data Petambak Berhasil Diperbaharui');
        return redirect()->route('petambak-index');

    }

    public function cari(Request $request) {
        $kata_kunci = trim($request->input('kata_kunci'));

        if (! empty($kata_kunci)) {
            // Query
            $query = Petambak::where('nama', 'LIKE', '%' . $kata_kunci . '%');   
            $petambak_list = $query->paginate(2);

            // URL Links pagination
            $pagination = $petambak_list->appends(['kata_kunci' => $kata_kunci]);

            $jumlah_petambak = $petambak_list->total();
            return view('dashboard.tampilpetambak', compact('petambak_list','kata_kunci', 'pagination', 'jumlah_petambak'));
        }

        return redirect()->route('petambak-index');
    }

}
