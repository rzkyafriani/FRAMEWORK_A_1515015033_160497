<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Dosen_Matakuliah;
use App\Dosen;
use App\Matakuliah;

class Dosen_MatakuliahController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal()
    {
        $semuaDosenMatakuliah = Dosen_Matakuliah::all();
        return view('dosen_matakuliah.awal',compact('semuaDosenMatakuliah'));
    }
    public function tambah()
    {
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        $dosen_matakuliah = new Dosen_Matakuliah;
        return view('dosen_matakuliah.tambah', compact('dosen','matakuliah','dosen_matakuliah'));
    }
    public function simpan(Request $input)
    {
        $dosen_matakuliah = new Dosen_Matakuliah($input->only('dosen_id','matakuliah_id')); 
        if($dosen_matakuliah->save()) $this->informasi= 'Jadwal Mahasiswa Berhasil Di Simpan';
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function edit ($id)
    {
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        return view('dosen_matakuliah.edit',compact('dosen','matakuliah','dosen_matakuliah'));

    }
    public function lihat ($id)
    {
    $dosen_matakuliah = Dosen_Matakuliah::find($id);
    return view ('dosen_matakuliah.lihat')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
    }
    public function update ($id,request $input)
    {
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        $dosen_matakuliah->matakuliah_id = $input->matakuliah_id;
        $dosen_matakuliah->dosen_id = $input->dosen_id;
        $informasi = $dosen_matakuliah->save()? 'Berhasil Update Data' : 'Gagal Update Data';
        return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
    }
    public function hapus ($id)
    {
    $dosen_matakuliah=Dosen_Matakuliah::find($id);
    $informasi = $dosen_matakuliah->delete() ? 'Berhasil Hapus Data' : 'Gagal hapus Data';
    return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
    }
        
}
