<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen;

class DosenController extends Controller
{
     public function awal()
    {
    	return "Dosen The Best";
    }

    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new Dosen();
    	$dosen->nama='Ani Suryani';
    	$dosen->nip='1515015008';
    	$dosen->alamat='Jalan Kesejahteraan Damai';
    	$dosen->pengguna_id='1';
    	$dosen->save();
    	return "Selamat kepada Yth. {$dosen->nama}, NIP anda {$dosen->nip}. Selamat Jalan & Semoga Bahagia";
    }
}
