<?php

namespace App\Http\Controllers;

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

}
