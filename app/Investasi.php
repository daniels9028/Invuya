<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class investasi extends Model
{
    public $timestamps = false;
    protected $table ='investasi';
    protected $primaryKey='id_investasi';
    protected $jumlah_lot;
    protected $id_investor;
    protected $id_proyek;

    public static function ambilSemua()
    {
        return self::all();
    }

    public static function ambil($id_investasi)
    {
        return self::find($id_investasi);
    }

    public static function ambil2($id_proyek)
    {
        $collection=investasi::all();
        $collection=$collection->where('id_proyek',$id_proyek);
        return $collection;
    }
    
    public function investor(){
        return $this->belongsTo('App\investor','id_investor');
    }

    public function proyek(){
        return $this->belongsTo('App\proyek','id_proyek');
    }

    public function pembayaran(){
        return $this->hasOne('App\pembayaran','id_investasi');
    }
}
