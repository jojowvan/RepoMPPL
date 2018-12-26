<?php session()->put('flag', 1); ?>
@extends('user.userPartial.master')

@section('content')
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
          <h1>Daftar Staff</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
            <li><a href="{{ route('home') }}">Halaman Utama</a></li>
            <li class="active">Daftar Staff</li>
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
                      <th style="text-align:center;">Nama Staff</th>
                      <th style="text-align:center;">Email</th>
                      <th style="text-align:center;">Bidang</th>
                      <th style="text-align:center;">NIP</th>
                      <th style="text-align:center;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = 1;
                      foreach(App\User::orderBy('id')->get() as $staff) {
                        if(auth()->user()->id != $staff->id) {
                          if($staff->jabatan == 3) {
                            $jabatan = 'Kepala Sekolah';
                          }

                          else if($staff->jabatan == 1) {
                            $jabatan = 'Staff Administrasi Kesiswaan dan Keuangan';
                          }

                          else if($staff->jabatan == 2) {
                            $jabatan = 'Staff Sarana dan Prasarana';
                          }
                    ?>
                    <tr>
                      <td style="text-align:center;">{{ $i }}.</td>
                      <td>{{ $staff->name }}</td>
                      <td>{{ $staff->email }}</td>
                      <td>{{ $jabatan }}</td>
                      <td style="text-align:center;">{{ $staff->nip }}</td>
                      <td style="text-align:center; width:18%;">
                        <form>
                          <a href="{{route('editStaff', $staff->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                          <form action="" method="post" id="deleteButton{{ $staff->id }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-sm"></i>Delete</button>
                            <script>
                              document.getElementById('deleteButton{{ $staff->id }}').onclick = function(event){
                                event.preventDefault();
                              	swal({
                              		title: "Apakah anda yakin ingin menghapus?",
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
                                  document.getElementById("deleteButton{{ $staff->id }}").submit();
                              	});
                              };
                            </script>
                          </form>
                        </form>
                      </td>
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
