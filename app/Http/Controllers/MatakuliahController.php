<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Matakuliah;

class MatakuliahController extends Controller
{
     public function awal()
    {
    	return "Mata Kuliah Yehet";
    }

    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new Matakuliah();
    	$matakuliah->titile='Pemprograman Framework';
    	$matakuliah->keterangan='Ini matakuliah fleksibel';
    	$matakuliah->save();
    	return "Data dengan matakuliah {$matakuliah->titile} dengan keterangan {$matakuliah->keterangan} telah disimpan";

    }
}
