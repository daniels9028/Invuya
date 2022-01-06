<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    public $timestamps = false;
    protected $table ='pemesanan';
    protected $primaryKey='id_pemesanan';
    protected $nama;
    protected $no_telp;
    protected $lokasi;
    protected $kuantitas;
    protected $status;
    protected $id_komoditas;
    protected $tanggal_pesan;
  
    public static function ambilSemua()
    {
        return self::all();
    }

    public static function ambil($id_pemesanan)
    {
        return self::find($id_pemesanan);
    }

    public function komoditas(){
        return $this->belongsTo('App\komoditas','id_komoditas');
    }

    // Scope Status
    public function scopeStatus($query, $status) {
        return $query->where('status', $status);
    }

}
