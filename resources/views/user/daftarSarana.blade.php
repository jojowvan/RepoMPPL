<?php session()->put('flag', 8); ?>
@extends('user.userPartial.master')

@section('content')
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
          <h1>Daftar Sarana dan Prasarana</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
            <li><a href="{{ route('home') }}">Halaman Utama</a></li>
            <li class="active">Daftar Sarana dan Prasarana</li>
          </ol>
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
                      <th style="text-align:center;">Keterangan</th>
                      <th style="text-align:center;">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      use App\Sarana;

                      $i = 1;
                      foreach(Sarana::orderBy('nama_sarana')->get() as $sarana) {
                        $tanggal = explode('-', $sarana->tanggal_pembelian);
                        if($tanggal[1] == 1) {
                          $bulan = 'Januari';
                        }
                        else if($tanggal[1] == 2) {
                          $bulan = 'Februari';
                        }
                        else if($tanggal[1] == 3) {
                          $bulan = 'Maret';
                        }
                        else if($tanggal[1] == 4) {
                          $bulan = 'April';
                        }
                        else if($tanggal[1] == 5) {
                          $bulan = 'Mei';
                        }
                        else if($tanggal[1] == 6) {
                          $bulan = 'Juni';
                        }
                        else if($tanggal[1] == 7) {
                          $bulan = 'Juli';
                        }
                        else if($tanggal[1] == 8) {
                          $bulan = 'Agustus';
                        }
                        else if($tanggal[1] == 9) {
                          $bulan = 'September';
                        }
                        else if($tanggal[1] == 10) {
                          $bulan = 'Oktober';
                        }
                        else if($tanggal[1] == 11) {
                          $bulan = 'November';
                        }
                        else if($tanggal[1] == 12) {
                          $bulan = 'Desember';
                        }
                    ?>

                    <tr>
                      <td style="text-align:center;">{{ $i }}.</td>
                      <td>{{ $sarana->nama_sarana }}</td>
                      <td style="text-align:center;">{{ $sarana->jumlah }} buah</td>
                      <td style="text-align:center;">{{$tanggal[2]}} {{$bulan}} {{$tanggal[0]}}</td>
                      <td style="text-align:center;">{{ $sarana->keterangan }}</td>
                      <td style="text-align:center;">
                        <form action="{{route('editSarana')}}" method="post">
                          {{ csrf_field() }}
                          <input type="hidden" value="{{$sarana->id_sarana}}" name="id_sarana">
                          <button type="submit" class="btn btn-success btn-xs"></i>Edit Sarana</button>
                        </form>
                      </td>
                    </tr>

                    <?php
                        $i++;
                        }
                    ?>
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
