<?php session()->put('flag', 2); ?>
@extends('user.userPartial.master')

@section('content')
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
          <h1>Tambah Staff</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
            <li><a href="{{ route('home') }}">Halaman Utama</a></li>
            <li class="active">Tambah Staff</li>
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
                <form action="{{ route('tambahStaff')}}" method="post" class="">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-user"></i></div>
                      <input type="text" name="nama_staff" placeholder="Nama Staff" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                      <input type="text" name="email" placeholder="Email Staff" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-id-card"></i></div>
                      <input type="text" name="nip" placeholder="NIP Staff" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                      <select class="tags form-control program-multi" name="jabatan" required="required">
                        <option value="" disabled selected hidden>Pilih Jabatan</option>
                        <option value="3">Kepala Sekolah</option>
                        <option value="1">Staff Administrasi Kesiswaan dan Keuangan</option>
                        <option value="2">Staff Sarana dan Prasarana</option>
                      </select>
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
