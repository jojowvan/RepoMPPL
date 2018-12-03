<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/tambahSiswa', 'StaffAdministrasiController@tambahSiswa')->name('tambahSiswa');
//Route::get('/tambahCabang', 'AdminController@tambahCabang')->name('tambahCabang');

Route::group(['prefix'=>'KepalaSekolah'], function(){
  Route::get('/DaftarStaff', 'KepalaSekolahController@daftarStaff')->name('daftarStaff');
  Route::get('/TambahStaff', 'KepalaSekolahController@formTambahStaff')->name('formTambahStaff');
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
