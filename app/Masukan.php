<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masukan extends Model
{
    public $timestamps = false;
    protected $table ='masukan';
    protected $primaryKey='id_masukan';
    protected $fillable = ['nama','email','masukan'];

    public static function ambilSemua()
    {
        return self::all();
    }

    public static function ambil($id_masukan)
    {
        return self::find($id_masukan);
    }
}
