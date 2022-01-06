<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    public $timestamps = false;
    protected $table ='berita';
    protected $primaryKey='id_berita';
    protected $fillable = ['judul','gambar','konten'];

    public static function ambilSemua()
    {
        return self::all();
    }

    public static function ambil($id_berita)
    {
        return self::find($id_berita);
    }
}
