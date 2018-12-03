<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffSaranaController extends Controller
{
  public function daftarSarana()
  {
      return view('user/daftarSarana');
  }

  public function anggaranSarana()
  {
      return view('user/anggaranSarana');
  }

  public function tambahSarana()
  {
      return view('user/tambahSarana');
  }
}
