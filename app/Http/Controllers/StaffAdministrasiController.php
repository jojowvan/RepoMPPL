<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;
use App\SPP;
use Carbon\Carbon;
use DB;

class StaffAdministrasiController extends Controller
{
  public function daftarSiswa()
  {
      return view('user/daftarSiswa');
  }

  public function formTambahSiswa()
  {
      return view('user/tambahSiswa');
  }

  public function tambahSiswa(Request $request)
{

  $user   = Siswa::create([
          'nama_siswa'   => $request->input('nama_siswa'),
          'nisn'         => $request->input('nisn'),
          'tahun_masuk'  => $request->input('tahun_masuk'),
          'alamat'       => $request->input('alamat'),
          'no_hp_ortu'   => $request->input('no_hp_ortu'),
      ]);

  $id_siswa = Siswa::latest()->value('id_siswa');
  $tahun = Carbon::now()->format('Y');
  $bulan_terakhir = ($tahun - $request->input('tahun_masuk')) * 12;

  $spp  = SPP::create([
        'id_siswa'        => $id_siswa,
        'bulan_terakhir'  => $bulan_terakhir,
      ]);

  session()->flash('success', 'Siswa Berhasil Ditambahkan');
  return redirect()->back();
}

  public function formBayarSPP()
  {
      return view('user/bayarSPP');
  }

  public function bayarSPP(Request $request)
{
    $id_siswa = Siswa::where('nisn', $request->input('nisn'))->value('id_siswa');
    DB::table('spp')->where('id_siswa', $id_siswa)->update(['bulan_terakhir' => DB::raw('bulan_terakhir + 1')]);

  session()->flash('success', 'SPP Sukses Ditambahkan');
  return redirect()->back();
}

}
