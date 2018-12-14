<?php

use Illuminate\Database\Seeder;

class AnggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('anggaran')->insert([
    [
        'id_anggaran'         => 1,
        'id_staff'            => 3,
        'nama_sarana'         => 'Panci',
        'jumlah'              => 3,
        'harga'               => 150000,
        'setuju'              => NULL,
    ],
    [
        'id_anggaran'         => 2,
        'id_staff'            => 3,
        'nama_sarana'         => 'Kompor',
        'jumlah'              => 2,
        'harga'               => 550000,
        'setuju'              => NULL,
    ],
    ]);
    }
}
