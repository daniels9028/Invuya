<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\investor;
use Alert;

class InvestorController extends Controller
{
    public function index()
    {
        $investor=investor::ambilSemua();
        $investor=investor::orderBy('nama','asc')->paginate(10);
        $jumlah_investor=investor::count();
        return view('dashboard.tampilinvestor',['investor_list'=>$investor],['jumlah_investor'=>$jumlah_investor]);
    }
    public function detail($id_investor)
    {
        $investor = investor::ambil($id_investor);
        return view('dashboard.investordetail',['investor'=>$investor]);
    }

    public function create()
    {
        return view('dashboard.tambahinvestor');
    }

    
    public function store(Request $request)
    {
        // Validasi
       
        $validator=$this->validate($request,[
           'nama'=>'required',
           'alamat'=>'required',
           'no_telp'=>'required',
           'tgl_lahir'=>'required|date',
           'gender'=>'required|in:L,P',
           'nik'=>'required',
           'foto'=>'required|image|mimes:jpeg,jpg,png',
           'pekerjaan'=>'required',
           'email'=>'required|email|unique:petambak',
        ]);
      
       
        $investor = new Investor;
        $investor->nama= $request->nama;
        $investor->alamat= $request->alamat;
        $investor->no_telp= $request->no_telp;
        $investor->tgl_lahir= $request->tgl_lahir;
        $investor->gender =$request->gender;
        $investor->nik =$request->nik;
        $investor->pekerjaan =$request->pekerjaan;
        $investor->email = $request->email;
       
        if($request->hasFile('foto')){
            $file=$request->file('foto');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('fotoupload',$filename);
            $investor->foto=$filename;
        }else{
            return $request;
            $investor->foto='';
        }
        $investor->save();
       
        // Flass message.
        Alert::success('', 'Data Investor Berhasil Ditambahkan');
        return redirect()->route('investor-index');
    }
    public function cari(Request $request) {
        $kata_kunci = trim($request->input('kata_kunci'));

        if (! empty($kata_kunci)) {
            // Query
            $query = investor::where('nama', 'LIKE', '%' . $kata_kunci . '%');   
            $investor_list = $query->paginate(2);

            // URL Links pagination
            $pagination = $investor_list->appends(['kata_kunci' => $kata_kunci]);

            $jumlah_investor = $investor_list->total();
            return view('dashboard.tampilinvestor', compact('investor_list','kata_kunci', 'pagination', 'jumlah_investor'));
        }

        return redirect()->route('investor-index');
    }

}
