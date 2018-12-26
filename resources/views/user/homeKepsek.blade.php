<?php session()->put('flag', 0); ?>
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
                    <th style="text-align:center;">Total Barang</th>
                    <th style="text-align:center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; ?>
                  @foreach($anggarans as $anggaran)
                  @if($anggaran->setuju == NULL)
                  <tr>
                    <td style="text-align:center;">{{ $i }}.</td>
                    <td>{{ $anggaran->nama_sarana }}</td>
                    <td style="text-align:center;">{{ $anggaran->jumlah }} Buah</td>
                    <td style="text-align:center;">Rp {{ number_format($anggaran->harga, 0, ',', '.') }}</td>
                    <td style="text-align:center; width:30%;">
                      <?php
                        session()->put('id_anggaran', $anggaran->id_anggaran);
                       ?>
                       <form>
                      <a class="btn btn-success btn-xs" href="{{route('anggaranSetuju')}}">Setuju</a>
                      <form action="{{route('anggaranTidakSetuju')}}" method="post" id="deleteButton{{ $anggaran->id_anggaran }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_anggaran" value="{{$anggaran->id_anggaran}}">
                        <button type="submit" class="btn btn-danger btn-xs"></i>Tidak Setuju</button>
                        <!-- <script>
                          document.getElementById('deleteButton{{ $anggaran->id_anggaran }}').onclick = function(event){
                            event.preventDefault();
                            swal({
                              title: "Apakah anda yakin tidak setuju?",
                              text: "Anda tidak dapat mengembalikan kembali.",
                              type: "warning",
                              showCancelButton: true,
                              confirmButtonColor: '#DD6B55',
                              confirmButtonText: 'Ya',
                              closeOnConfirm: false,
                              //closeOnCancel: false
                            },
                            function(){
                              // swal("Terhapus", "Akun telah terhapus!", "Sukses");
                              document.getElementById("deleteButton{{ $anggaran->id_anggaran }}").submit();
                            });
                          };
                        </script> -->
                      </form>
                    </form>
                    </td>
                  </tr>
                  <?php $i++; ?>
                  @endif
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
