<header id="header" class="header">

  <div class="header-menu">
    <div class="col-sm-7">
      <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
    </div>

    <div class="col-sm-5">
      <div class="user-area dropdown float-right">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="user-avatar rounded-circle" src="{{ asset('images/admin.jpg') }}" alt="User Avatar">
        </a>
        <div class="user-menu dropdown-menu">
          <?php
            if(auth()->user()->jabatan==3) {
          ?>

          <a class="nav-link" href="{{ route('password.kepsek') }}"><i class="fa fa -cog"></i>Pengaturan</a>

          <?php
            }
            else if(auth()->user()->jabatan==1) {
          ?>

          <a class="nav-link" href="{{ route('password.keuangan') }}"><i class="fa fa -cog"></i>Pengaturan</a>

          <?php
            }
            else if(auth()->user()->jabatan==2) {
          ?>

          <a class="nav-link" href="{{ route('password.sarana') }}"><i class="fa fa -cog"></i>Pengaturan</a>

          <?php
            }
          ?>
          <a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-power -off"></i>Keluar</a>
        </div>
      </div>
    </div>
  </div>

</header>
