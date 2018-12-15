<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">
    <div class="navbar-header">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand"><img src="{{ asset('images/simakeu.png') }}" alt="Logo"></a>
      <a class="navbar-brand hidden"><img src="{{ asset('images/school.png') }}" width="25" height="30" alt="Logo"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
      <ul class="nav navbar-nav">

        <?php
          if(auth()->user()->jabatan==3) {
         ?>

        <li>
          <a href="{{ route('home') }}"> <i class="menu-icon fa fa-dashboard"></i>Halaman Utama</a>
        </li>

        <h3 class="menu-title">Kepala Sekolah</h3>
        <li>
          <a href="{{ route('daftarStaff') }}"> <i class="menu-icon fa fa-users"></i>Daftar Staff</a>
        </li>
        <li>
          <a href="{{ route('formTambahStaff') }}"> <i class="menu-icon fa fa-user-plus"></i>Tambah Staff</a>
        </li>
        <li>
          <a href="{{ route('lihatAnggaran') }}"> <i class="menu-icon fa fa-users"></i>Daftar Sarana</a>
        </li>
        <li>
          <a href="{{ route('lihatLaporan') }}"> <i class="menu-icon fa fa-file"></i>Laporan</a>
        </li>
        <!-- <li>
          <a href=""> <i class="menu-icon ti-email"></i>Pembayaran SPP</a>
        </li> -->

        <?php
          }
          else if(auth()->user()->jabatan==1) {
         ?>

        <h3 class="menu-title">Kesiswaan</h3>
        <li>
          <a href="{{ route('daftarSiswa') }}"> <i class="menu-icon fa fa-users"></i>Daftar Siswa</a>
        </li>
        <li>
          <a href="{{ route('formTambahSiswa') }}"> <i class="menu-icon fa fa-user-plus"></i>Tambah Siswa</a>
        </li>
        <li>
          <a href="{{ route('formBayarSPP') }}"> <i class="menu-icon fa fa-credit-card"></i>Pembayaran SPP</a>
        </li>

        <?php
          }
          else if(auth()->user()->jabatan==2) {
         ?>

        <h3 class="menu-title">Sarana dan Prasarana</h3>
        <li>
          <a href="{{ route('daftar.sarana') }}"> <i class="menu-icon fa fa-cogs"></i>Daftar Sarana</a>
        </li>
        <li>
          <a href="{{ route('tambah.sarana') }}"> <i class="menu-icon fa fa-plus-square"></i>Tambah Sarana</a>
        </li>
        <li>
          <a href="{{ route('daftar.anggaran') }}"> <i class="menu-icon fa fa-shopping-cart"></i>Daftar Anggaran</a>
        </li>
        <li>
          <a href="{{ route('rencana.anggaran') }}"> <i class="menu-icon fa fa-cart-plus"></i> Tambah Anggaran</a>
        </li>

        <?php
          }
         ?>
      </ul>
    </div>
  </nav>
</aside>
