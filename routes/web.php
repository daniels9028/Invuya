<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('perantara.lamanperantara');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/admin', 'DashboardController@profil')->name('admin');
Route::post('/admin.update', 'DashboardController@updateProfil')->name('admin.update');

Route::get('/beranda', 'LandingController@beranda')->name('beranda');
Route::get('/partner', 'LandingController@partner')->name('partner');
Route::get('/information', 'PertanyaanController@information')->name('information');
Route::get('/produk', 'ProyekController@produk')->name('produk');
Route::get('/isiproduk/{id_proyek}', 'ProyekController@isiproduk')->name('isiproyek');
Route::get('/masukan', 'MasukanController@masukan')->name('masukan');
Route::post('/berimasukan', 'MasukanController@store')->name('masukanstore');
Route::get('/masukan-index','MasukanController@index')->name('masukan-index');
Route::get('/masukan-detail/{id_masukan}', 'MasukanController@detail')->name('masukan-detail');
Route::get('/sell', 'PemesananController@sell')->name('sell');
Route::get('/pemesanan/{id_komoditas}', 'PemesananController@create')->name('pemesanan');
Route::get('/news', 'BeritaController@news')->name('news');
Route::get('/isiberita/{id_berita}', 'BeritaController@isiberita')->name('isiberita');


Route::get('/petambak-index','PetambakController@index')->name('petambak-index');
Route::get('/petambak-create','PetambakController@create')->name('petambak-create');
Route::post('/petambak-store', 'PetambakController@store')->name('petambak-store');
Route::get('/petambak-detail/{id_petambak}', 'PetambakController@detail')->name('petambak-detail');
Route::delete('/petambak-delete/{id_petambak}', 'PetambakController@destroy')->name('petambak-delete');
Route::get('/petambak-edit/{id_petambak}', 'PetambakController@edit')->name('petambak-edit');
Route::patch('/petambak-update/{id_petambak}', 'PetambakController@update')->name('petambak-update');
Route::get('petambak-index/cari', 'PetambakController@cari');


//Berita
Route::get('/berita-index','BeritaController@index')->name('berita-index');
Route::get('/berita-create','BeritaController@create')->name('berita-create');
Route::post('/berita-store', 'BeritaController@store')->name('berita-store');
Route::get('/berita-detail/{id_berita}', 'BeritaController@detail')->name('berita-detail');
Route::delete('/berita-delete/{id_berita}', 'BeritaController@destroy')->name('berita-delete');
Route::get('/berita-edit/{id_berita}', 'BeritaController@edit')->name('berita-edit');
Route::patch('/berita-update/{id_berita}', 'BeritaController@update')->name('berita-update');
Route::get('berita-index/cari', 'BeritaController@cari');
Route::get('berita-index/download','BeritaController@download');
Route::get('/news', 'BeritaController@news')->name('news');
Route::get('/isiberita/{id_berita}', 'BeritaController@isiberita')->name('isiberita');

//Data Investor
Route::get('/investor-index','InvestorController@index')->name('investor-index');
Route::get('/investor-detail/{id_investor}', 'InvestorController@detail')->name('investor-detail');
Route::get('investor-index/cari', 'InvestorController@cari');
Route::get('/investor-create','InvestorController@create')->name('investor-create');
Route::post('/investor-store', 'InvestorController@store')->name('investor-store');


//Pemasaran Komoditas
Route::get('/komoditas-index','KomoditasController@index')->name('komoditas-index');
Route::get('/komoditas-create','KomoditasController@create')->name('komoditas-create');
Route::post('/komoditas-store', 'KomoditasController@store')->name('komoditas-store');
Route::get('/komoditas-detail/{id_komoditas}', 'KomoditasController@detail')->name('komoditas-detail');
Route::delete('/komoditas-delete/{id_komoditas}', 'KomoditasController@destroy')->name('komoditas-delete');
Route::get('/komoditas-edit/{id_komoditas}', 'KomoditasController@edit')->name('komoditas-edit');
Route::patch('/komoditas-update/{id_komoditas}', 'KomoditasController@update')->name('komoditas-update');
Route::get('komoditas-index/cari', 'KomoditasController@cari');



//Proyek Investasi
Route::get('/proyek-index','ProyekController@index')->name('proyek-index');
Route::get('/proyek-create','ProyekController@create')->name('proyek-create');
Route::post('/proyek-store', 'ProyekController@store')->name('proyek-store');
Route::get('/proyek-detail/{id_proyek}', 'ProyekController@detail')->name('proyek-detail');
Route::delete('/proyek-delete/{id_proyek}', 'ProyekController@destroy')->name('proyek-delete');
Route::get('/proyek-edit/{id_proyek}', 'ProyekController@edit')->name('proyek-edit');
Route::patch('/proyek-update/{id_proyek}', 'ProyekController@update')->name('proyek-update');
Route::get('proyek-index/cari', 'ProyekController@cari');

//Pembayaran
Route::get('/pembayaran-index','PembayaranController@index')->name('pembayaran-index');
Route::get('/pembayaran-detail/{id_pembayaran}', 'PembayaranController@detail')->name('pembayaran-detail');
Route::get('pembayaran-index/cari', 'PembayaranController@cari');
Route::delete('/pembayaran-delete/{id_pembayaran}', 'PembayaranController@destroy')->name('pembayaran-delete');
Route::get('/pembayaran-index/status/{id_pembayaran}','PembayaranController@status');


//Riwayat Investasi
Route::get('/riwayat-index','RiwayatController@index')->name('riwayat-index');
Route::get('riwayat-index/cari', 'RiwayatController@cari');
Route::get('/riwayat-detail/{id_proyek}', 'RiwayatController@detail')->name('riwayat-detail');

//Laporan
Route::get('/laporan-index','LaporanController@index')->name('laporan-index');
Route::get('/laporan-create','LaporanController@create')->name('laporan-create');
Route::post('/laporan-store', 'LaporanController@store')->name('laporan-store');
Route::get('/laporan-detail/{id_laporan}', 'LaporanController@detail')->name('laporan-detail');
Route::delete('/laporan-delete/{id_laporan}', 'LaporanController@destroy')->name('laporan-delete');
Route::get('/laporan-edit/{id_laporan}', 'LaporanController@edit')->name('laporan-edit');
Route::patch('/laporan-update/{id_laporan}', 'LaporanController@update')->name('laporan-update');
Route::get('laporan-index/cari', 'LaporanController@cari');

//FAQ
Route::get('/pertanyaan-index','PertanyaanController@index')->name('pertanyaan-index');
Route::get('/pertanyaan-create','PertanyaanController@create')->name('pertanyaan-create');
Route::post('/pertanyaan-store', 'PertanyaanController@store')->name('pertanyaan-store');
Route::get('/pertanyaan-detail/{id_pertanyaan}', 'PertanyaanController@detail')->name('pertanyaan-detail');
Route::delete('/pertanyaan-delete/{id_pertanyaan}', 'PertanyaanController@destroy')->name('pertanyaan-delete');
Route::get('/pertanyaan-edit/{id_pertanyaan}', 'PertanyaanController@edit')->name('pertanyaan-edit');
Route::patch('/pertanyaan-update/{id_pertanyaan}', 'PertanyaanController@update')->name('pertanyaan-update');
Route::get('pertanyaan-index/cari', 'PertanyaanController@cari');