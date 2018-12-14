<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home/{id_anggaran}', 'StaffSaranaController@updateAnggaran')->name('update');


// Route::post('/tambahSiswa', 'StaffAdministrasiController@tambahSiswa')->name('tambahSiswa');
//Route::get('/tambahCabang', 'AdminController@tambahCabang')->name('tambahCabang');

Route::group(['prefix'=>'KepalaSekolah'], function(){
  Route::get('/DaftarStaff', 'KepalaSekolahController@daftarStaff')->name('daftarStaff');
  Route::get('/TambahStaff', 'KepalaSekolahController@formTambahStaff')->name('formTambahStaff');
  Route::post('/TambahStaff', 'KepalaSekolahController@tambahStaff')->name('tambahStaff');
  Route::get('/EditStaff', 'KepalaSekolahController@editStaff')->name('editStaff');
  Route::post('/EditStaff', 'KepalaSekolahController@editStaff1')->name('editStaff1');
  Route::get('/DaftarSarana', 'KepalaSekolahController@lihatSarana')->name('lihatAnggaran');
  Route::get('/SaranaSetuju', 'KepalaSekolahController@anggaranSetuju')->name('anggaranSetuju');
  Route::get('/Laporan', 'KepalaSekolahController@pdf')->name('lihatLaporan');
  // Route::post('/TambahSiswa', 'StaffAdministrasiController@tambahSiswa')->name('tambahSiswa');
  // Route::get('/BayarSPP', 'StaffAdministrasiController@formBayarSPP')->name('formBayarSPP');
  // Route::post('/BayarSPP', 'StaffAdministrasiController@bayarSPP')->name('bayarSPP');
});

Route::group(['prefix'=>'Administrasi'], function(){
  Route::get('/DaftarSiswa', 'StaffAdministrasiController@daftarSiswa')->name('daftarSiswa');
  Route::get('/TambahSiswa', 'StaffAdministrasiController@formTambahSiswa')->name('formTambahSiswa');
  Route::post('/TambahSiswa', 'StaffAdministrasiController@tambahSiswa')->name('tambahSiswa');
  Route::get('/BayarSPP', 'StaffAdministrasiController@formBayarSPP')->name('formBayarSPP');
  Route::post('/BayarSPP', 'StaffAdministrasiController@bayarSPP')->name('bayarSPP');
});

Route::group(['prefix'=>'SaranaPrasarana'], function(){
  Route::get('/DaftarSarana', 'StaffSaranaController@daftarSarana')->name('daftar.sarana');
  Route::get('/AnggaranSarana', 'StaffSaranaController@anggaranSarana')->name('anggaran.sarana');
  Route::get('/TambahSarana', 'StaffSaranaController@tambahSarana')->name('tambah.sarana');
  Route::post('/TambahSarana', 'StaffSaranaController@tambahSarana1')->name('tambah.sarana1');
  Route::get('/DaftarAnggaran', 'StaffSaranaController@daftarAnggaran')->name('daftar.anggaran');
  Route::get('/RencanaAnggaran', 'StaffSaranaController@rencanaAnggaran')->name('rencana.anggaran');
  Route::post('/RencanaAnggaran', 'StaffSaranaController@rencanaAnggaran1')->name('rencana.anggaran1');
  Route::post('/tambahSaranaOtomatis', 'StaffSaranaController@tambahSaranaOtomatis')->name('tambahSaranaOtomatis');
  Route::get('/BatalkanAnggaran', 'StaffSaranaController@batalAnggaran')->name('batalAnggaran');

});
//
// Route::get('/loginDua', function () {
//     return view('Auth/loginDua');
// });
//
// Route::get('/HomeUser', 'UserController@homeUser')->name('home.user');
//
// Route::group(['prefix'=>'Keuangan'], function(){
//   Route::get('/DaftarSiswa', 'StaffAdministrasiController@daftarSiswa')->name('daftar.siswa');
//   Route::get('/TambahSiswa', 'StaffAdministrasiController@tambahSiswa')->name('tambah.siswa');
// });
//
// Route::group(['prefix'=>'SaranaPrasarana'], function(){
//   Route::get('/DaftarSarana', 'StaffSaranaController@daftarSarana')->name('daftar.sarana');
//   Route::get('/AnggaranSarana', 'StaffSaranaController@anggaranSarana')->name('anggaran.sarana');
//   Route::get('/TambahSarana', 'StaffSaranaController@tambahSarana')->name('tambah.sarana');
// });

Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
})->name('logout');
