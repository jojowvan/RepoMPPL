<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php $value = Session::get('flag'); ?>
    <?php
    if($value==0) {
      $value = 'Kepala Sekolah';
    }
    else if($value==1) {
      $value = 'Daftar Staff';
    }
    else if($value==2) {
      $value = 'Tambah Staff';
    }
    else if($value==3) {
      $value = 'Daftar Sarana';
    }
    else if($value==4) {
      $value = 'Pengaturan';
    }
    else if($value==5) {
      $value = 'Daftar Siswa';
    }
    else if($value==6) {
      $value = 'Tambah Siswa';
    }
    else if($value==7) {
      $value = 'Pembayaran SPP';
    }
    else if($value==8) {
      $value = 'Daftar Sarana dan Prasarana';
    }
    else if($value==9) {
      $value = 'Tambah Sarana dan Prasarana';
    }
    else if($value==10) {
      $value = 'Daftar Anggaran';
    }
    else if($value==11) {
      $value = 'Tambah Anggaran';
    }
    ?>
    <title> <?php echo $value; ?> </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="{{ asset('images/school.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/style.css') }}">
    <link href="{{ asset('assets/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/chosen/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
  </head>
  <body>
    @include('user.userPartial.sidebar')

    <div id="right-panel" class="right-panel">
      <!-- Header-->
      @include('user.userPartial.header')
      <!-- Header-->
      @yield('content')
    </div>

    @include('user.userPartial.script')
  </body>
</html>
