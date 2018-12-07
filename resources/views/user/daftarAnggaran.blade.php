@extends('user.userPartial.master')

@section('content')
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
          <h1>Daftar Anggaran</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
            <li><a href="{{ route('home') }}">Halaman Utama</a></li>
            <li class="active">Daftar Anggaran</li>
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
              <div class="card-header">
                <!-- <strong class="card-title">Data Table</strong> -->
              </div>
              <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th style="text-align:center;">No.</th>
                      <th style="text-align:center;">Nama Barang</th>
                      <th style="text-align:center;">Jumlah Barang</th>
                      <th style="text-align:center;">Harga Barang</th>
                      <th style="text-align:center;">Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      use App\Anggaran;

                      $i = 1;
                      foreach(Anggaran::orderBy('id_anggaran')->get() as $anggaran) {
                    ?>

                    <tr>
                      <td style="text-align:center;">{{ $i }}.</td>
                      <td>{{ $anggaran->nama_sarana }}</td>
                      <td style="text-align:center;">{{ $anggaran->jumlah }} Buah</td>
                      <td style="text-align:center;">Rp {{ number_format($anggaran->harga, 0, ',', '.') }}</td>
                      @if($anggaran->setuju == NULL)
                      <td style="text-align:center;">Belum Dilihat</td>
                      @elseif($anggaran->setuju == 1)
                      <td style="text-align:center;">Sudah Disetujui</td>
                      @elseif($anggaran->setuju == 2)
                      <td style="text-align:center;">Tidak Disetujui</td>
                      @endif
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
