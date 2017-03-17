<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
       public function awal()
    {
    	return "Mahasiswa In The Best";
    }

    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama='Tini Suryani';
    	$mahasiswa->nim='1515015025';
    	$mahasiswa->alamat='Jalan Mencari Damai';
    	$mahasiswa->pengguna_id='2';
    	$mahasiswa->save();
    	return "Selamat kepada Yth. {$mahasiswa->nama}, NIP anda {$mahasiswa->nim}. Selamat Jalan & Hidup Bahagia";
    }
}
