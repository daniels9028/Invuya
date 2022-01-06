<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    public $timestamps = false;
    protected $table ='laporan';
    protected $primaryKey='id_laporan';
    protected $file_laporan;
    protected $judul_laporan;
    protected $tanggal;
    protected $id_proyek;

    public static function ambilSemua()
    {
        return self::all();
    }

    public static function ambil($id_laporan)
    {
        return self::find($id_laporan);
    }

    public static function ambil3($id_proyek)
    {
        $collection=laporan::all();
        $collection=$collection->where('id_proyek',$id_proyek);
        return $collection;
    }

    public function proyek(){
        return $this->belongsTo('App\proyek','id_proyek');
    }
}
