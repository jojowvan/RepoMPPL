<?php

namespace App\Http\Controllers;

use App\User;
use App\Sarana;
use App\Anggaran;
use Mail;
use PDF;
use Session;
use Illuminate\Support\Facades\Hash;
use App\Notifications\SendPassword; //hapus
use Illuminate\Http\Request;

class KepalaSekolahController extends Controller
{

  public function daftarStaff()
  {
      return view('user/daftarStaff');
  }

  public function formTambahStaff()
  {
      return view('user/tambahStaff');
  }

  public function tambahStaff(Request $request)
  {
    $password = str_random(10);
    session()->put('password', $password);

    // $email = $request->input('email');

    $user   = User::create([
            'name'         => $request->input('nama_staff'),
            'email'        => $request->input('email'),
            'nip'          => $request->input('nip'),
            'jabatan'      => $request->input('jabatan'),
            'password'     => Hash::make($password),
        ]);



    Mail::send('mail', array('key' => 'value'), function($message)
    {
        $email = User::latest()->value('email');
        $message->to($email)->subject('This is Your Password');
    });
    // $info = User::latest()->first();
    // $info->notify(new SendPassword());


    session()->flash('success', 'Staff Berhasil Ditambahkan');
    return redirect()->back();
  }

  public function editStaff()
  {
    $id_staff = Session::get('id_staff');
    $staff = User::where('id', $id_staff)->first();
    $jabatane = User::orderBy('jabatan')->get()->pluck('jabatan')->toArray();
    $jabatane = array_unique($jabatane);
    $jabatane = collect($jabatane);
    // dd($jabatane);
    return view('user/editStaff', compact('staff', 'jabatane'));
  }

  public function editStaff1(Request $request)
  {
    $staff = User::where('id', $request->id)->first();

    $staff->update([
            'name'          => $request->input('nama_staff'),
            'email'         => $request->input('email'),
            'nip'           => $request->input('nip'),
            'jabatan'       => $request->input('jabatan'),
        ]);

    session()->flash('notif', 'Edit Staff Succesful!');

    return redirect()->route('daftarStaff');
  }

  public function lihatSarana()
  {
    $saranas = Sarana::orderBy('nama_sarana')->get();
    return view('user/lihatSarana', compact('saranas'));
  }

  public function anggaranSetuju()
  {
    $id_anggaran = Session::get('id_anggaran');
    $anggaran = Anggaran::where('id_anggaran', $id_anggaran)->update(['setuju' => 1]);

    return redirect()->route('home');
  }

  public function anggaranTidakSetuju(Request $request)
  {
    $anggaran = Anggaran::where('id_anggaran', $request->id_anggaran)->update(['setuju' => 2]);

    return redirect()->route('home');
  }

  public function pdf()
  {
    $pdf = PDF::loadView('laporan');
    return $pdf->stream('Laporan.pdf');
  }
}
