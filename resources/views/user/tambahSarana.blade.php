<?php session()->put('flag', 9); ?>
@extends('user.userPartial.master')

@section('content')
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
          <h1>Tambah Sarana dan Prasarana</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
            <li><a href="{{ route('home') }}">Halaman Utama</a></li>
            <li class="active">Tambah Sarana dan Prasarana</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

          <!-- Content -->
          <div class="col-lg-10" style="padding-left: 190px;">
            <div class="card">
              <!-- <div class="card-header">Example Form</div> -->
              <div class="card-body card-block">
                <form action="{{ route('tambah.sarana1') }}" method="post" class="">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-cog"></i></div>
                      <input type="text" id="username" name="nama_sarana" placeholder="Nama Sarana" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-plus"></i></div>
                      <input type="number" id="email" name="jumlah" placeholder="Jumlah" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                      <input type="date" id="password" name="tanggal" placeholder="Tanggal Pembelian" class="form-control">
                    </div>
                  </div>
                  <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Tambah</button></div>
                </form>
              </div>
            </div>
          </div>
          <!-- //Content -->

        </div>
    </div>
  </div>
@endsection
