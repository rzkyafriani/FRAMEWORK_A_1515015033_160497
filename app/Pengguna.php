<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
  public function mahasiswa(){
  	return $this->hasOne(Mahasiswa::class);
  }

  public function dosen(){
  	return $this->hasOne(Dosen::class);
  }

  public function peran(){
  	return $this->belongsToMany(Peran::class);
  }

    protected $table ='pengguna';
    protected $fillable =['username','password'];
}

