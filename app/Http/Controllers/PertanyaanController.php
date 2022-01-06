<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use Alert;
class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan=Pertanyaan::ambilSemua();
        $pertanyaan=Pertanyaan::orderBy('pertanyaan','asc')->paginate(10);
        $jumlah_pertanyaan=Pertanyaan::count();
        return view('dashboard.pertanyaan.tampilpertanyaan',['pertanyaan_list'=>$pertanyaan],['jumlah_pertanyaan'=>$jumlah_pertanyaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view('dashboard.pertanyaan.tambahpertanyaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi

        $validator=$this->validate($request,[
            'pertanyaan'=>'required',
            'jawaban'=>'required',
            ]);

            $pertanyaan = new Pertanyaan;
            $pertanyaan->pertanyaan= $request->pertanyaan;
            $pertanyaan->jawaban= $request->jawaban;
            $pertanyaan->save();
            Alert::success('', 'Data FAQ Berhasil Ditambahkan');
            return redirect()->route('pertanyaan-index');

    }

    public function detail($id_pertanyaan)
    {
        $pertanyaan = pertanyaan::ambil($id_pertanyaan);
        return view('dashboard.pertanyaan.pertanyaandetail',['pertanyaan'=>$pertanyaan]);
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
    public function edit($id_pertanyaan)
    {
        $pertanyaan = Pertanyaan::ambil($id_pertanyaan);
        return view('dashboard.pertanyaan.editpertanyaan',['pertanyaan'=>$pertanyaan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pertanyaan)
    {
        $validator=$this->validate($request,[
            'pertanyaan'=>'required',
            'jawaban'=>'required',
            ]);

            $pertanyaan = new Pertanyaan;
            $pertanyaan->pertanyaan= $request->pertanyaan;
            $pertanyaan->jawaban= $request->jawaban;
            $pertanyaan->save();
            Alert::success('', 'Data FAQ Berhasil Diperbaharui');
            return redirect()->route('pertanyaan-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_komoditas)
    {
        $pertanyaan = Pertanyaan::find($id_komoditas);
        $pertanyaan->delete();
         // Flass message.
         Alert::success('', 'Data FAQ Berhasil Dihapuskan');
 
        return redirect()->route('pertanyaan-index');
    }

    public function information()
    {
        $pertanyaan=Pertanyaan::ambilSemua();
        return view('fiturberanda.information',['pertanyaan'=>$pertanyaan]);
    }
}
