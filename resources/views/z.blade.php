<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Manajemen dan Keuangan</title>
  <style type="text/css">
  table td{border-collapse:collapse;}
  </style>
</head>
<body>
  <?php
  use Carbon\Carbon;
  $bulan = (integer)Carbon::now()->month;
	if($bulan == 1) {
	  $bulan = 'Januari';
	}
	else if($bulan == 2) {
	  $bulan = 'Februari';
	}
	else if($bulan == 3) {
	  $bulan = 'Maret';
	}
	else if($bulan == 4) {
	  $bulan = 'April';
	}
	else if($bulan == 5) {
	  $bulan = 'Mei';
	}
	else if($bulan == 6) {
	  $bulan = 'Juni';
	}
	else if($bulan == 7) {
	  $bulan = 'Juli';
	}
	else if($bulan == 8) {
	  $bulan = 'Agustus';
	}
	else if($bulan == 9) {
	  $bulan = 'September';
	}
	else if($bulan == 10) {
	  $bulan = 'Oktober';
	}
	else if($bulan == 11) {
	  $bulan = 'November';
	}
	else if($bulan == 12) {
	  $bulan = 'Desember';
	}
  ?>
	<center>
		<h2>LAPORAN BULAN <?php echo $bulan ?></h2>
		<h4>SMAN X Lampung</h4>
	</center>

	<br/>

	<table border=1>
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
						else if($spp == 2) {
							$spp = 'Februari';
						}
						else if($spp == 3) {
							$spp = 'Maret';
						}
						else if($spp == 4) {
							$spp = 'April';
						}
						else if($spp == 5) {
							$spp = 'Mei';
						}
						else if($spp == 6) {
							$spp = 'Juni';
						}
						else if($spp == 7) {
							$spp = 'Juli';
						}
						else if($spp == 8) {
							$spp = 'Agustus';
						}
						else if($spp == 9) {
							$spp = 'September';
						}
						else if($spp == 10) {
							$spp = 'Oktober';
						}
						else if($spp == 11) {
							$spp = 'November';
						}
						else if($spp == 12) {
							$spp = 'Desember';
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

	<p>
		Tutorial membuat cetak print laporan dengan php. pada tutorial ini kita akan belajar cara membuat cetak laporan pada PHP dengan cara paling mudah.
	</p>

  <table border=1>
    <thead>
      <tr>
        <th style="text-align:center;">No.</th>
        <th style="text-align:center;">Nama Barang</th>
        <th style="text-align:center;">Jumlah Barang</th>
        <th style="text-align:center;">Tanggal Pembelian</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $i = 1;
          foreach(App\Sarana::orderBy('id_sarana')->get() as $sarana) {
        $tanggal = explode("-", $sarana->tanggal_pembelian);
        if($tanggal[1] == 1) {
          $tanggal[1] = 'Januari';
        }
        else if($tanggal[1] == 2) {
          $tanggal[1] = 'Februari';
        }
        else if($tanggal[1] == 3) {
          $tanggal[1] = 'Maret';
        }
        else if($tanggal[1] == 4) {
          $tanggal[1] = 'April';
        }
        else if($tanggal[1] == 5) {
          $tanggal[1] = 'Mei';
        }
        else if($tanggal[1] == 6) {
          $tanggal[1] = 'Juni';
        }
        else if($tanggal[1] == 7) {
          $tanggal[1] = 'Juli';
        }
        else if($tanggal[1] == 8) {
          $tanggal[1] = 'Agustus';
        }
        else if($tanggal[1] == 9) {
          $tanggal[1] = 'September';
        }
        else if($tanggal[1] == 10) {
          $tanggal[1] = 'Oktober';
        }
        else if($tanggal[1] == 11) {
          $tanggal[1] = 'November';
        }
        else if($tanggal[1] == 12) {
          $tanggal[1] = 'Desember';
        }
       ?>
      <tr>
        <td style="text-align:center;"> {{$i}}.</td>
        <td>{{ $sarana->nama_sarana }}</td>
        <td style="text-align:center;">{{ $sarana->jumlah }} Buah</td>
        <td style="text-align:center;">{{ $tanggal[2] }} {{$tanggal[1]}} {{$tanggal[0]}}</td>
      </tr>
      <?php
        $i++;
      }
      ?>
    </tbody>
  </table>

	<p>
		Ini adalah contoh data yang diprint pada tutorial <b>MEMBUAT CETAK PRINT LAPORAN DENGAN PHP</b> dari <b>www.malasngoding.com</b>, halaman ini akan dicetak sesuai dengan format HTML yang terdapat dalam file cetak1.php ini.
	</p>

</body>
</html>
