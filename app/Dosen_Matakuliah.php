<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
	public function dosen(){
		return $this->belongsto(dosen::class);
	}
	public function matakuliah(){
		return $this->belongsto(matakuliah::class);

	}
	public function jadwal_matakuliah(){
		return $this->hasMany(jadwal_matakuliah::class);
	}
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];
    protected $guarded=['id'];
    public function listDosenDanMatakuliah()
    {
    	$out = [];
    	foreach ($this->all() as $dsnMtk) {
    		$out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} (Matakuliah {$dsnMtk->matakuliah->titile})";
    	}
    	return $out;
    	}
   
}
