<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Investor;
use App\Petambak;
use App\Proyek;
use App\Pembayaran;
use App\Laporan;
use App\Komoditas;
use App\Masukan;
use App\Pertanyaan;

use App\berita;

class DashboardController extends Controller
{
    use UploadTrait;
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
    {
        $investor=investor::count();
        $petambak=petambak::count();
        $proyek=proyek::count();
        $pembayaran=pembayaran::count();
        $laporan=laporan::count();
        $komoditas=komoditas::count();
        $masukan=masukan::count();
        $berita=berita::count();
        $pertanyaan=pertanyaan::count();
        return view('backend.dashboard',compact('investor','petambak','pertanyaan','masukan', 'proyek', 'pembayaran','laporan','komoditas','berita'));
    }

    public function layout()
    {
        return view('backend.lte.main');
    }

    public function profil()
    {
        $profil = User::all();
        return view('backend.tentangadmin',['personal'=>$profil]);
    }

    public function updateProfil(Request $request)
    {
        // Form validation
        $request->validate([
            'name'              =>  'required',
            'email'     => 'required',
            'foto_profil'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        // Set user name
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->alamat = $request->input('alamat');
        $user->pendidikan = $request->input('pendidikan');
        $user->no_telp = $request->input('no_telp');
        $user->biodata = $request->input('biodata');

        // Check if a profile image has been uploaded
        if ($request->has('foto_profil')) {
            // Get image file
            $image = $request->file('foto_profil');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')).'_'.time();
            // Define folder path
            $folder = '/images/foto_profil/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $user->foto_profil = $filePath;
        }
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return redirect()->back()->with(['status' => 'Data Admin berhasi di perbaharui.']);
    }


}
