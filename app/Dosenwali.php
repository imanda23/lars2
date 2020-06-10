<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosenwali extends Model
{
    // Mengkaitkan tabel dosenwali dengan tabel mahasiswa
    public function mahasiswa(){
        return $this->hasMany('App\Mahasiswa');
    }
}
