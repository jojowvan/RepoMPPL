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
            <li class="active">Edit Staff</li>
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
                <form action="{{ route('editStaff1')}}" method="post" class="">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="id" value="{{$staff->id}}">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-user"></i></div>
                      <input type="text" name="nama_staff" placeholder="Nama Staff" class="form-control" value="{{$staff->name}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                      <input type="text" name="email" placeholder="Email Staff" class="form-control" value="{{$staff->email}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-id-card"></i></div>
                      <input type="text" name="nip" placeholder="NIP Staff" class="form-control" value="{{$staff->nip}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                      <?php
                        if($staff->jabatan == 1) {
                          $jabatan = "Staff Administrasi Kesiswaan dan Keuangan";
                        }
                        else if($staff->jabatan == 2) {
                          $jabatan = "Staff Sarana dan Prasarana";
                        }
                        else {
                          $jabatan = "Kepala Sekolah";
                        }
                       ?>
                      <select class="tags form-control program-multi" name="jabatan" required="required">
                        <option value="{{$staff->jabatan}}"> {{$jabatan}} </option>
                        @foreach($jabatane as $jabatans)
                          @if($jabatans != $staff->jabatan)
                            <?php
                              if($jabatans == 1) {
                                $jabatan1 = "Staff Administrasi Kesiswaan dan Keuangan";
                              }
                              else if($jabatans == 2) {
                                $jabatan1 = "Staff Sarana dan Prasarana";
                              }
                              else {
                                $jabatan1 = "Kepala Sekolah";
                              }
                             ?>
                            <option value="{{$jabatans}}"> {{$jabatan1}} </option>
                          @endif
                        @endforeach


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
