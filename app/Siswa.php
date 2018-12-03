<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
      'nama_siswa', 'nisn', 'tahun_masuk', 'alamat', 'no_hp_ortu'
    ];
}
