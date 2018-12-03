<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sarana extends Model
{
  protected $table = 'sarana';

  protected $fillable = [
    'nama_sarana', 'jumlah', 'tanggal_pembelian'
  ];
}
