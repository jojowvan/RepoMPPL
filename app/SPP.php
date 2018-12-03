<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SPP extends Model
{
    protected $table = 'spp';

    protected $fillable = [
      'id_siswa', 'bulan_terakhir',
    ];
}
