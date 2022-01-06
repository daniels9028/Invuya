<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    public $timestamps = false;
    protected $table ='pertanyaan';
    protected $primaryKey='id_pertanyaan';
    protected $fillable = ['pertanyaan','jawaban'];


    public static function ambilSemua()
    {
        return self::all();
    }

    public static function ambil($id_pertanyaan)
    {
        return self::find($id_pertanyaan);
    }
}
