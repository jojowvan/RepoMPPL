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
                    <th style="text-align:center;">Harga Barang</th>
                    <th style="text-align:center;">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    use App\Anggaran;
                    $i = 1;
                    if(Anggaran::orderBy('setuju')->get() == NULL){
                    foreach(Anggaran::orderBy('id_anggaran')->get() as $anggaran) {
                  ?>
                  <tr>
                    <td style="text-align:center;">{{ $i }}.</td>
                    <td>{{ $anggaran->nama_sarana }}</td>
                    <td style="text-align:center;">{{ $anggaran->jumlah }} Buah</td>
                    <td style="text-align:center;">Rp {{ number_format($anggaran->harga, 0, ',', '.') }}</td>
                    <td style="text-align:center;">
                      <form method="POST" action="{{ route('update', $anggaran->id_anggaran) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-success" name="setuju" value="1">{{ __('Setuju') }}</button>
                        <button type="submit" class="btn btn-danger" name="setuju" value="2">{{ __('Tidak Setuju') }}</button>
                      </form>
                    </td>
                    <?php
                          $i++;
                        }
                      }
                    ?>
                  </tr>
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
