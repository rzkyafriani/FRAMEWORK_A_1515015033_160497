<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matakuliah extends Model
{
	public function mahasiswa(){
		return $this->belongsto(Mahasiswa::class);

		}
	public function ruangan(){
		return $this->belongsto(Ruangan::class);
	}

	public function dosen_matakuliah(){
		return $this->belongsto(dosen_matakuliah::class);
	}
    protected $table = 'jadwal_matakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
	protected $guarded=['id'];

	// public function getNamadsnAttribute(){
	// 	return $this->dosen_matakuliah->dosen->nama;
	// }

	// public function getNipdsnAttribute(){
	// 	return $this->dosen_matakuliah->dosen->nip;
	// }

	// public function getMKdsnAttribute(){
	// 	return $this->dosen_matakuliah->dosen->nama;
	// }

	// public function getNamaAttribute(){
	// 	return $this->mahasiswa->nama;
	// }

	// public function getNimAttribute(){
	// 	return $this->mahasiswa->nim;
	// }

	// public function getTitleAttribute(){
	// 	return $this->mahasiswa->title;
	// }
}
