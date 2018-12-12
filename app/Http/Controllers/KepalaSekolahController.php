<?php

namespace App\Http\Controllers;

use App\User;
use Mail;
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

}
