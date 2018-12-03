<?php

use Illuminate\Database\Seeder;

class SaranaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sarana')->insert([
    [
        'nama_sarana'         => 'Kursi',
        'jumlah'              => 200,
        'tanggal_pembelian'   => '15 September 2018',
        'remember_token'      => str_random(10),
    ],
    [
        'nama_sarana'         => 'Meja',
        'jumlah'              => 100,
        'tanggal_pembelian'   => '15 September 2018',
        'remember_token'      => str_random(10),
    ],
    [
        'nama_sarana'         => 'Papan Tulis',
        'jumlah'              => 26,
        'tanggal_pembelian'   => '15 September 2018',
        'remember_token'      => str_random(10),
    ],
    ]);
    }
}
