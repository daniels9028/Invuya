<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petambak extends Model
{
    public $timestamps = false;
    protected $table ='petambak';
    protected $primaryKey='id_petambak';
    protected $nama;
    protected $alamat;
    protected $gender;
    protected $no_telp;
    protected $foto_ktp;
    protected $tanggal_lahir;
    protected $email;
    protected $fillable = ['nama','alamat','gender','no_telp','foto_ktp','tanggal_lahir','email'];

    public static function ambilSemua()
    {
        return self::all();
    }

    public static function ambil($id_petambak)
    {
        return self::find($id_petambak);
    }

    public function komoditas(){
        return $this->hasMany('App\Komoditas','id_petambak');
    }

    // Scope Jenis Kelamin
    public function scopeJenisKelamin($query, $gender) {
        return $query->where('gender', $gender);
    }
    
    public function proyek(){
        return $this->hasMany('App\Proyek','id_petambak');
    }
}
