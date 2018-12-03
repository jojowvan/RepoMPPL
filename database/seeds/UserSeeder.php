<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
    [
        'name'      => 'Kepala Sekolah',
        'email'     => 'luthfipijo@gmail.com',
        'password'  => Hash::make('kepsek'),
        'nip'       => '1000',
        'jabatan'   => 3,
        'remember_token' => str_random(10),
    ],
    [
        'name'      => 'Staff Administrasi Kesiswaan dan Keuangan',
        'email'     => 'bellakurniaaa5@gmail.com',
        'password'  => Hash::make('keuangan'),
        'nip'       => '1001',
        'jabatan'   => 1,
        'remember_token' => str_random(10),
    ],
    [
        'name'      => 'Staff Sarana dan Prasarana',
        'email'     => 'saumnuarim66@gmail.com',
        'password'  => Hash::make('sarana'),
        'nip'       => '1002',
        'jabatan'   => 2,
        'remember_token' => str_random(10),
    ],
    ]);
    }
}
