<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
  protected $table= 'mahasiswa';
  protected $fillable= ['nama','nim','alamat','pengguna_id'];
    
    public function pengguna(){
    	return $this->belongsto(Pengguna::class);
    }
    public function jadwal_matakuliah(){
    	return $this->hasMany(Jadwal_Matakuliah::class);
    }
    public function getUsernameAttribute(){
    	return $this->pengguna->username;
    }
public function listMahasiswaDanNim()
{
    $out = [];
    foreach ($this->all() as $mhs) {
        $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
    }
return $out;
}
}
