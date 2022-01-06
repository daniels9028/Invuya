<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyek;
use DB;
use Illmunate\Support\Collection;

class LandingController extends Controller
{
    public function beranda()
    {
        $proyek = Proyek::all();     
        return view('beranda',['proyek'=>$proyek]);
    }
    public function partner()
    {
        return view('fiturberanda.partner');
    }

    // public function information()
    // {
    //     return view('fiturberanda.information');
    // }
}
