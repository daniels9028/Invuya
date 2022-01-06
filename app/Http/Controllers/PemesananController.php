<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Storage;
use App\Komoditas;
use App\Pemesanan;
use Session;
use Validator;
use Response;
use DB;
use Alert;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan=Pemesanan::ambilSemua();
        $pemesanan=Pemesanan::orderBy('nama','asc')->paginate(10);
        $jumlah_pemesanan=Pemesanan::count();
        return view('dashboard.pemesanan.tampilpemesanan',['pemesanan_list'=>$pemesanan],['jumlah_pemesanan'=>$jumlah_pemesanan]);
    }

    public function status($id_pemesanan)
    {    
      $data = \DB::table('pemesanan')->where('id_pemesanan',$id_pemesanan)->first();
      $status_sekarang= $data->status;
      if($status_sekarang==1){
          \DB::table('pemesanan')->where('id_pemesanan',$id_pemesanan)->update([
              'status'=>'0'
          ]);
      }else{
        \DB::table('pemesanan')->where('id_pemesanan',$id_pemesanan)->update([
            'status'=>'1'
        ]);
      }

      $pemesanan = Pemesanan::ambil($id_pemesanan);
      Mail::send('emailtemplate', ['pemesanan' => $pemesanan], function($mail) use($pemesanan) {
          $mail->from('officialinvuya@gmail.com', 'Invuya Indonesia');
          $mail->to($pemesanan->komoditas->petambak->email, $pemesanan->komoditas->petambak->nama);
      });

      Alert::success('Berhasil Diinfokan', '');
      return redirect()->route('pemesanan-index');
    }

    public function destroy($id_pemesanan)
    {
       $pemesanan = Pemesanan::find($id_pemesanan);
       $pemesanan->delete();
        // Flass message.
        Alert::success('Berhasil Dihapus', '');

       return redirect()->route('pemesanan-index');
    }

    public function cari(Request $request) {
        $kata_kunci = trim($request->input('kata_kunci'));

        if (! empty($kata_kunci)) {
            $status = $request->input('status');
        
            // Query
            $query = Pemesanan::where('nama', 'LIKE', '%' . $kata_kunci . '%');
            (! empty($status)) ? $query->Status($status) : '';
         
            $pemesanan_list = $query->paginate(2);

            // URL Links pagination
            $pagination = (! empty($status)) ? $pemesanan_list->appends(['status' => $status]) : '';
            $pagination = $pemesanan_list->appends(['kata_kunci' => $kata_kunci]);

            $jumlah_pemesanan = $pemesanan_list->total();
            return view('dashboard.pemesanan.tampilpemesanan', compact('pemesanan_list','kata_kunci', 'pagination', 'jumlah_pemesanan','status'));
        }

        return redirect()->route('pemesanan-index');
    }

    public function detail($id_pemesanan)
    {
        $pemesanan = Pemesanan::ambil($id_pemesanan);
        return view('dashboard.pemesanan.pemesanandetail',['pemesanan'=>$pemesanan]);
    }

    //public function send($id_pemesanan) 
    //{
    //    $pemesanan = pemesanan::ambil($id_pemesanan);
    //    Mail::send('emailtemplate', ['pemesanan' => $pemesanan], function($mail) use($pemesanan) {
    //        $mail->from('officialinvuya@gmail.com', 'Invuya Indonesia');
    //        $mail->to($pemesanan->komoditas->petambak->email, $pemesanan->komoditas->petambak->nama);
    //    });
         // Flass message.
     //    Session::flash('flash_message', 'Email berhasil dikirim ke petambak.');
     //    return redirect()->route('pemesanan-index');
    //}

        public function sell()
        {
            $komoditas=Komoditas::ambilSemua();
            return view ('fiturberanda.sell',['komoditas'=>$komoditas]);
        }

        public function create($id_komoditas)
        {
            $id_komoditas = $id_komoditas;
            $komoditas = Komoditas::ambil($id_komoditas);
            return view ('fiturberanda.pemesanan', compact('id_komoditas', 'komoditas'));
        }

        public function store(Request $request)
        {
            //
            $pemesanan = new Pemesanan;
            $pemesanan->nama= $request->nama;
            $pemesanan->no_telp =$request->no_telp;
            $pemesanan->kuantitas= $request->kuantitas;
            $pemesanan->lokasi= $request->lokasi;
            $pemesanan->email= $request->email;
            $pemesanan->id_komoditas = $request->id_komoditas;
            $pemesanan->save();

            return redirect()->route('pemesananshow',['id_pemesanan'=>$pemesanan->id_pemesanan]);

        }
        
        public function show($id_pemesanan)
        {
            //
            $pemesanan = Pemesanan::ambil($id_pemesanan);
            return view('fitur.pemesananshow',['pemesanan'=>$pemesanan]);
        }

    
}
