<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komoditas extends Model
{
    public $timestamps = false;
    protected $table ='komoditas';
    protected $primaryKey='id_komoditas';
    protected $fillable = ['nama_komoditas','harga','foto','tipe','ukuran','id_petambak','min_order'];


    public static function ambilSemua()
    {
        return self::all();
    }

    public static function ambil($id_komoditas)
    {
        return self::find($id_komoditas);
    }

    public function petambak(){
        return $this->belongsTo('App\petambak','id_petambak');
    }



}
