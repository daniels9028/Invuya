<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    public $timestamps = false;
    protected $table ='ketentuan';
    protected $primaryKey='id_ketentuan';
    protected $fillable = ['ketentuan'];


    public static function ambilSemua()
    {
        return self::all();
    }

    public static function ambil($id_ketentuan)
    {
        return self::find($id_ketentuan);
    }
}
