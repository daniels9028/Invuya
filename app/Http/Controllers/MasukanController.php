<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masukan;
use Alert;

class MasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masukan=Masukan::ambilSemua();
        $masukan=Masukan::orderBy('nama','asc')->paginate(10);
        $jumlah_masukan=Masukan::count();
        return view('dashboard.masukan.tampilmasukan',['masukan_list'=>$masukan],['jumlah_masukan'=>$jumlah_masukan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id_masukan)
    {
        $masukan = Masukan::ambil($id_masukan);
        return view('dashboard.masukan.masukandetail',['masukan'=>$masukan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
            //
            $masukan = new Masukan;
            $masukan->nama= $request->nama;
            $masukan->email= $request->email;
            $masukan->masukan= $request->masukan;
            $masukan->save();
            Alert::info('Invuya', 'Terima Kasih Untuk Masukkannya');
            return redirect()->route('beranda');

        }

        public function cari(Request $request) {
            $kata_kunci = trim($request->input('kata_kunci'));
    
            if (! empty($kata_kunci)) {
                // Query
                $query = Masukan::where('nama', 'LIKE', '%' . $kata_kunci . '%');
                $masukan_list = $query->paginate(2);
    
                // URL Links pagination
                $pagination = $masukan_list->appends(['kata_kunci' => $kata_kunci]);
    
                $jumlah_masukan = $masukan_list->total();
                return view('dashboard.masukan.tampilmasukan', compact('masukan_list','kata_kunci', 'pagination', 'jumlah_masukan'));
            }
    
            return redirect()->route('masukan-index');
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function masukan()
    {
        return view('fiturberanda.masukan');
    }
}
