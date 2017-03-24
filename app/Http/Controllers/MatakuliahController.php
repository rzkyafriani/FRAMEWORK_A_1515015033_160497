<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Matakuliah;
class MatakuliahController extends Controller
{
    public function awal(){
        return view('matakuliah.awal', ['data'=>Matakuliah::all()]);
    }
    public function tambah(){
        return view('matakuliah.tambah');
    }
    public function simpan(Request $input){
        $matakuliah = new Matakuliah();
        $matakuliah->titile = $input->titile;
        $matakuliah->keterangan = $input->keterangan;
        $informasi = $matakuliah->save() ? 'Berhasil Simpan Data' : 'Gagal Simpan Data'; 
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }
    public function edit($id){
        $matakuliah = Matakuliah::find($id);
        return view('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));
    }
    public function lihat($id){
        $matakuliah = Matakuliah::find($id);
        return view('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
    }
    public function update(Request $input, $id ){
        $matakuliah = Matakuliah::find($id);
        $matakuliah->titile = $input->titile;
        $matakuliah->keterangan = $input->keterangan;
        $informasi = $matakuliah->save() ? 'Berhasil Simpan Data' : 'Gagal Simpan Data'; 
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }
    public function hapus($id){
        $matakuliah = Matakuliah::find($id);
        $informasi = $matakuliah->delete() ? 'Berhasil Hapus Data' : 'Gagal JHapus Data'; 
        return redirect('matakuliah')->with(['informasi'=>$informasi]); 
    }
}

