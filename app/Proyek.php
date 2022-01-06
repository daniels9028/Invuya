<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyek extends Model
{
    public $timestamps = false;
    protected $table ='proyek';
    protected $primaryKey='id_proyek';
    
    protected $fillable = ['nama_proyek','total_lot','gambar','prospektus','roi','lokasi','tanggal_mulai_p','tanggal_selesai_p','tanggal_selesai','proposal_usaha','id_petambak'];


    public static function ambilSemua()
    {
        return self::all();
    }

    public static function ambil($id_proyek)
    {
        return self::find($id_proyek);
    }

    public function petambak(){
        return $this->belongsTo('App\petambak','id_petambak');
    }

    public function investor()
    {
        return $this->belongsToMany('App\investor','investasi','id_proyek','id_investor');
    }

    public function laporan(){
        return $this->hasMany('App\laporan','id_proyek');
    }

}
