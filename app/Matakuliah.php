<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
	public function dosen_matakuliah(){
		return $this->hasMany(dosen_matakuliah::class);
	}
    protected $table = 'matakuliah';
    protected $fillable = ['titile','keterangan'];
}
