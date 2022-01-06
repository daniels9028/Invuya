<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\proyek;
use App\investasi;
use App\laporan;
use App\investor;
use App\petambak;
use Session;
use Validator;
use Response;
use DB;
use PDF;
use Alert;

class RiwayatController extends Controller
{
    public function index()
    {
        $riwayat=proyek::orderBy('nama_proyek','asc')->paginate(10);
        $jumlah_riwayat=proyek::count();
        return view('dashboard.riwayat.tampilriwayat',['riwayat_list'=>$riwayat],['jumlah_riwayat'=>$jumlah_riwayat]);
    }

    public function detail($id_proyek)
    {
        $laporan=laporan::ambil3($id_proyek);
        $investasi=investasi::ambil2($id_proyek);
        $proyek = proyek::ambil($id_proyek);
        return view('dashboard.riwayat.riwayatdetail',compact('proyek','investasi','laporan'));
    }

    public function cari(Request $request) {
        $kata_kunci = trim($request->input('kata_kunci'));

        if (! empty($kata_kunci)) {
            // Query
            $query = proyek::where('nama_proyek', 'LIKE', '%' . $kata_kunci . '%');   
            $riwayat_list = $query->paginate(2);

            // URL Links pagination
            $pagination = $riwayat_list->appends(['kata_kunci' => $kata_kunci]);

            $jumlah_riwayat = $riwayat_list->total();
            return view('dashboard.riwayat.tampilriwayat', compact('riwayat_list','kata_kunci', 'pagination', 'jumlah_riwayat'));
        }
        return redirect()->route('riwayat-index');
    }


}
