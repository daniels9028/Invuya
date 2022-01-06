<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Storage;
use App\pembayaran;
use App\investasi;
use App\petambak;
use App\proyek;
use App\investor;
use Session;
use Validator;
use Response;
use DB;
use Alert;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran=pembayaran::ambilSemua();
        $pembayaran=pembayaran::orderBy('tanggal_bayar','asc')->paginate(10);
        $jumlah_pembayaran=pembayaran::count();
        return view('dashboard.pembayaran.tampilpembayaran',['pembayaran_list'=>$pembayaran],['jumlah_pembayaran'=>$jumlah_pembayaran]);
    }

    public function status($id_pembayaran)
    {    
      $data = \DB::table('pembayaran')->where('id_pembayaran',$id_pembayaran)->first();
      $status_sekarang= $data->status_bayar;
      if($status_sekarang==1){
          \DB::table('pembayaran')->where('id_pembayaran',$id_pembayaran)->update([
              'status_bayar'=>'0'
          ]);
      }else{
        \DB::table('pembayaran')->where('id_pembayaran',$id_pembayaran)->update([
            'status_bayar'=>'1'
        ]);
      }

      $pembayaran = pembayaran::ambil($id_pembayaran);
      Mail::send('emailtemplate2', ['pembayaran' => $pembayaran], function($mail) use($pembayaran) {
          $mail->from('officialinvuya@gmail.com', 'Invuya Indonesia');
          $mail->to($pembayaran->investasi->investor->email, $pembayaran->investasi->investor->nama);
      });

      Alert::success('', 'Status Pembayaran Telah Terverifikasi');
      return redirect()->route('pembayaran-index');
    }

    public function destroy($id_pembayaran)
    {
       $pembayaran = pembayaran::find($id_pembayaran);
       $pembayaran->delete();
        // Flass message.
        Alert::success('', 'Data Pembayaran Berhasil Dihapuskan');

       return redirect()->route('pembayaran-index');
    }

    public function cari(Request $request) {
        $kata_kunci = trim($request->input('kata_kunci'));

        if (! empty($kata_kunci)) {
            $status_bayar = $request->input('status_bayar');
        
            // Query
            $query = pembayaran::where('nama_pemilik', 'LIKE', '%' . $kata_kunci . '%');
            (! empty($status_bayar)) ? $query->Status($status_bayar) : '';
         
            $pembayaran_list = $query->paginate(2);

            // URL Links pagination
            $pagination = (! empty($status_bayar)) ? $pembayaran_list->appends(['status_bayar' => $status_bayar]) : '';
            $pagination = $pembayaran_list->appends(['kata_kunci' => $kata_kunci]);

            $jumlah_pembayaran = $pembayaran_list->total();
            return view('dashboard.pembayaran.tampilpembayaran', compact('pembayaran_list','kata_kunci', 'pagination', 'jumlah_pembayaran','status_bayar'));
        }

        return redirect()->route('pembayaran-index');
    }

    public function detail($id_pembayaran)
    {
        $pembayaran = pembayaran::ambil($id_pembayaran);
        return view('dashboard.pembayaran.pembayarandetail',['pembayaran'=>$pembayaran]);
    }

   // public function send($id_pembayaran) 
   // {
   //     $pembayaran = pembayaran::ambil($id_pembayaran);
    //    Mail::send('emailtemplate2', ['pembayaran' => $pembayaran], function($mail) use($pembayaran) {
    //        $mail->from('officialinvuya@gmail.com', 'Invuya Indonesia');
    //        $mail->to($pembayaran->investasi->investor->email, $pembayaran->investasi->investor->nama);
    //    });
         // Flass message.
    //     Session::flash('flash_message', 'Email berhasil dikirim ke investor.');
     //    return redirect()->route('pembayaran-index');
   // }
}
