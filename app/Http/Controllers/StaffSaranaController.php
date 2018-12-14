<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sarana;
use App\Anggaran;
use App\User;
use Auth;
use Session;
use Carbon\Carbon;

class StaffSaranaController extends Controller
{
  public function daftarSarana()
  {
      return view('user/daftarSarana');
  }

  public function daftarAnggaran()
  {
      return view('user/daftarAnggaran');
  }

  public function anggaranSarana()
  {
      return view('user/anggaranSarana');
  }

  public function tambahSarana()
  {
      return view('user/tambahSarana');
  }

  public function tambahSarana1(Request $request)
  {
    $sarana   = Sarana::create([
            'nama_sarana'        => $request->input('nama_sarana'),
            'jumlah'             => $request->input('jumlah'),
            'tanggal_pembelian'  => $request->input('tanggal'),
        ]);

      session()->flash('success', 'Sarana Berhasil Ditambahkan');
      return view('user/daftarSarana');
  }

  public function rencanaAnggaran()
  {
      return view('user/rencanaAnggaran');
  }

  public function rencanaAnggaran1(Request $request)
  {
    $anggaran   = Anggaran::create([
            'nama_sarana'        => $request->input('nama_sarana'),
            'id_staff'           => Auth::user()->id,
            'jumlah'             => $request->input('jumlah'),
            'harga'              => $request->input('harga'),
        ]);

      session()->flash('success', 'Sarana Berhasil Dianggarkan');
      return view('user/rencanaAnggaran');
  }

  public function updateAnggaran(Request $request, $id)
    {
        Anggaran::where('id_anggaran', $id)->update(['setuju'=>$request->setuju]);
      	return view('user/homeKepsek');
    }

  public function tambahSaranaOtomatis(Request $request)
  {
    $tanggal = Carbon::now()->toDateString();
    $sarana   = Sarana::create([
            'nama_sarana'        => $request->input('nama_sarana'),
            'jumlah'             => $request->input('jumlah'),
            'tanggal_pembelian'  => $tanggal,
        ]);

    $anggaran = Anggaran::where('id_anggaran', $request->input('id_anggaran'))->update(['setuju'=>3]);

    return redirect()->route('daftar.anggaran');
  }

  public function batalAnggaran()
  {
    dd(2);
  }
}
