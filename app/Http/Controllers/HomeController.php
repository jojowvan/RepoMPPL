<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

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
          return view('user/home');
        }
        else if(auth()->user()->jabatan==2) {
          return view('user/home');
        }
        else if(auth()->user()->jabatan==3) {
          return view('user/home');
        }
    }
}
