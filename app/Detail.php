<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //
    public function komoditas()
    {
        return $this->belongsTo('App\Komoditas');
    }
    public function pemesanan()
    {
        return $this->belongsTo('App\Pemesanan');
    }
}
