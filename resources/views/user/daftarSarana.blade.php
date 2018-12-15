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
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      use App\Sarana;

                      $i = 1;
                      foreach(Sarana::orderBy('id_sarana')->get() as $sarana) {
                    ?>

                    <tr>
                      <td style="text-align:center;">{{ $i }}.</td>
                      <td>{{ $sarana->nama_sarana }}</td>
                      <td style="text-align:center;">{{ $sarana->jumlah }} buah</td>
                      <td style="text-align:center;">{{ $sarana->tanggal_pembelian }}</td>
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
