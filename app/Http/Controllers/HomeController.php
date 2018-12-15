<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Anggaran;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->jabatan==1) {
          return view('user/daftarSiswa');
        }
        else if(auth()->user()->jabatan==2) {
          return view('user/daftarSarana');
        }
        else if(auth()->user()->jabatan==3) {
          $anggarans = Anggaran::orderBy('nama_sarana')->get();
          return view('user/homeKepsek', compact('anggarans'));
        }
    }
}
