<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    public $timestamps = false;
    protected $table ='pembayaran';
    protected $primaryKey='id_pembayaran';
    protected $nama_pemilik;
    protected $no_rekening;
    protected $jenis_bank;
    protected $bukti_transfer;
    protected $status_bayar;
    protected $tanggal_bayar;
    protected $id_investasi;


    public static function ambilSemua()
    {
        return self::all();
    }

    public static function ambil($id_pembayaran)
    {
        return self::find($id_pembayaran);
    }

    public function investasi(){
        return $this->belongsTo('App\investasi','id_investasi');
    }
}
