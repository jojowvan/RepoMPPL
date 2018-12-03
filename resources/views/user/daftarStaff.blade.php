@extends('user.userPartial.master')

@section('content')
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
          <h1>Dashboard</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
        <div class="page-title">
          <ol class="breadcrumb text-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Table</a></li>
            <li class="active">Data table</li>
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
                <strong class="card-title">Data Table</strong>
              </div>
              <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Staff</th>
                      <th>Bidang</th>
                      <th>NIP</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = 1;
                      foreach(App\User::orderBy('id')->get() as $staff) {
                        if(auth()->user()->id != $staff->id) {
                          if($staff->jabatan == 1) {
                            $jabatan = 'Kepala Sekolah';
                          }

                          else if($staff->jabatan == 2) {
                            $jabatan = 'Staff Administrasi Kesiswaan dan Keuangan';
                          }

                          else if($staff->jabatan == 3) {
                            $jabatan = 'Staff Sarana dan Prasarana';
                          }
                    ?>

                    <tr>
                      <td>{{ $i }}.</td>
                      <td>{{ $staff->name }}</td>
                      <td>{{ $jabatan }}</td>
                      <td>{{ $staff->nip }}</td>
                      <td>Hapus</td>
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
