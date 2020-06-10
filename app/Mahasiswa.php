<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{
    protected $fillable = ['nama', 'jenis_kelamin', 'nim', 'dosenwali_id'];

    public function dosenwali(){
        return $this->belongsTo('App\DosenWali');
    }
}
