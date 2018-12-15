<?php session()->put('flag', 5); ?>
@extends('user.userPartial.master')

@section('content')
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
          <h1>Daftar Siswa</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
            <li><a href="{{ route('home') }}">Halaman Utama</a></li>
            <li class="active">Daftar Siswa</li>
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
                      <th style="text-align:center;">Nama Siswa</th>
                      <th style="text-align:center;">NISN</th>
                      <th style="text-align:center;">Tingkat</th>
                      <th style="text-align:center;">Alamat</th>
                      <th style="text-align:center;">No. HP Orang Tua</th>
                      <th style="text-align:center;">Pembayaran SPP Terakhir</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      use Carbon\Carbon;
                      use App\SPP;
                      $tingkat = Carbon::now()->format('Y');
                      $i = 1;
                      foreach(App\Siswa::orderBy('nisn')->get() as $siswa) {
                        $tahun_masuk = $tingkat - $siswa->tahun_masuk + 10;
                        if($tahun_masuk <= 12) {
                          $spp = SPP::where('id_siswa', $siswa->id_siswa)->value('bulan_terakhir');
                          $spp = $spp % 12;
                          if($spp == 0) {
                            $spp = 'Desember';
                          }
                          else if($spp == 1) {
                            $spp = 'Januari';
                          }
                    ?>
                    <tr>
                      <td style="text-align:center;">{{ $i }}.</td>
                      <td>{{ $siswa->nama_siswa }}</td>
                      <td style="text-align:center;">{{ $siswa->nisn }}</td>
                      <td style="text-align:center;">{{ $tahun_masuk }}</td>
                      <td>{{ $siswa->alamat }}</td>
                      <td style="text-align:center;">{{ $siswa->no_hp_ortu }}</td>
                      <td style="text-align:center;">{{ $spp }}</td>
                    </tr>
                    <?php
                        $i++;
                        }
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
