<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class investor extends Model
{
    public $timestamps = false;
    protected $table ='investor';
    protected $primaryKey='id_investor';
    protected $nama;
    protected $alamat;
    protected $gender;
    protected $no_telp;
    protected $nik;
    protected $foto;
    protected $tgl_lahir;
    protected $pekerjaan;
    protected $email;

    public static function ambilSemua()
    {
        return self::all();
    }

    public static function ambil($id_investor)
    {
        return self::find($id_investor);
    }

    public function proyek()
    {
        return $this->belongsToMany('App\proyek','investasi','id_investor','id_proyek');
    }
   
}
