<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//route ruangan
Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');

//route matakuliah
Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');

//route dosen
Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');

//route mahasiswa
Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');

//ROUTE DOSEN_MATAKULIAH
Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');

//route jadwal matakuliah
Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');


//use\App\Pengguna;
//Route::get('pengguna/simpan',function(){

	//	$pengguna = new Pengguna();
  //  	$pengguna->username='rzkyafriani';
    //	$pengguna->password='1604iki';
    //	$pengguna->save();
	  //  	return "Data dengan Username {$pengguna->username} telah disimpan";
	   // });
	

Route::get('pengguna','PenggunaController@awal');

Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('/', function () {
    return view('welcome');
});

Route::get('public', function () {
    return view('Biodata');
});

Route::get('pengguna/{pengguna}', function($pengguna) {
    return("Hello Manis dari Dia $pengguna");

});
