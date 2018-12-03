<?php

use Illuminate\Database\Seeder;

class SPPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('spp')->insert([
      [
          'id_siswa'        => 1,
          'bulan_terakhir'  => 24,
      ],

      [
          'id_siswa'        => 2,
          'bulan_terakhir'  => 12,
      ],

      [
          'id_siswa'        => 3,
          'bulan_terakhir'  => 0,
      ],

      ]);
    }
}
