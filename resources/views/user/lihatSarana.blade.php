<?php session()->put('flag', 3); ?>
@extends('user.userPartial.master')

@section('content')
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
          <h1>Halaman Kepala Sekolah</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="content mt-3">
    <div class="animated fadeIn">
      <div class="row">

        <!-- Content -->
        <div class="col-md-12">
          <div class="card">
            <!-- <div class="card-header">
              <strong class="card-title">Data Table</strong>
            </div> -->
            <div class="card-body">
              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="text-align:center;">No.</th>
                    <th style="text-align:center;">Nama Barang</th>
                    <th style="text-align:center;">Jumlah Barang</th>
                    <th style="text-align:center;">Tanggal Pembelian</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  @foreach($saranas as $sarana)
                  <?php
                    $tanggal = explode("-", $sarana->tanggal_pembelian);
                    if($tanggal[1] == 1) {
                      $tanggal[1] = 'Januari';
                    }
                    else if($tanggal[1] == 2) {
                      $tanggal[1] = 'Februari';
                    }
                    else if($tanggal[1] == 3) {
                      $tanggal[1] = 'Maret';
                    }
                    else if($tanggal[1] == 4) {
                      $tanggal[1] = 'April';
                    }
                    else if($tanggal[1] == 5) {
                      $tanggal[1] = 'Mei';
                    }
                    else if($tanggal[1] == 6) {
                      $tanggal[1] = 'Juni';
                    }
                    else if($tanggal[1] == 7) {
                      $tanggal[1] = 'Juli';
                    }
                    else if($tanggal[1] == 8) {
                      $tanggal[1] = 'Agustus';
                    }
                    else if($tanggal[1] == 9) {
                      $tanggal[1] = 'September';
                    }
                    else if($tanggal[1] == 10) {
                      $tanggal[1] = 'Oktober';
                    }
                    else if($tanggal[1] == 11) {
                      $tanggal[1] = 'November';
                    }
                    else if($tanggal[1] == 12) {
                      $tanggal[1] = 'Desember';
                    }
                   ?>
                  <tr>
                    <td style="text-align:center;"> {{$i}}.</td>
                    <td>{{ $sarana->nama_sarana }}</td>
                    <td style="text-align:center;">{{ $sarana->jumlah }} Buah</td>
                    <td style="text-align:center;">{{ $tanggal[2] }} {{$tanggal[1]}} {{$tanggal[0]}}</td>
                  </tr>
                  <?php $i++; ?>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- //Content -->

      </div>
    </div>
  </div>
@endsection
