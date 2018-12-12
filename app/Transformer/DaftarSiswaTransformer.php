<?php

namespace App\Transformers;

use App\Siswa;
use League\Fractal\TransformersAbstract;

class DaftarSiswaTransformer extends TransformerAbstract
{
  return [
    'name'          => $siswa->nama_siswa,
    'nisn'          => $siswa->nisn,
    'tahun_masuk'   => $siswa->tahun_masuk,
  ]
}
