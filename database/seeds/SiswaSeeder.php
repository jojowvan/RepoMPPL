<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('siswa')->insert([
    [
        'nama_siswa'  => 'Siswa 1',
        'nisn'        => 2000,
        'tahun_masuk' => 2016,
        'alamat'      => 'Jalan Kenangan',
        'no_hp_ortu'  => '08561123112',
    ],
    [
        'nama_siswa'  => 'Siswa 2',
        'nisn'        => 2001,
        'tahun_masuk' => 2017,
        'alamat'      => 'Jalan Cinta',
        'no_hp_ortu'  => '08561123113'
    ],
    [
        'nama_siswa'  => 'Siswa 3',
        'nisn'        => 2002,
        'tahun_masuk' => 2018,
        'alamat'      => 'Jalan Asmara',
        'no_hp_ortu'  => '08561123114'
    ],

    ]);
    }
}
