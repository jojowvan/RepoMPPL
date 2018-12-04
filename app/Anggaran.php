<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggaran extends Model
{
  protected $table = 'anggaran';

  protected $fillable = [
    'nama_sarana', 'jumlah', 'harga', 'id_staff', 'setuju'
  ];
}
