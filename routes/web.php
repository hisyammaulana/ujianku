<?php

Auth::routes();

Route::get('/', 'PublicController@landing');

Route::get('/home', 'Dev\DeveloperController@index')->name('home');

Route::get('/beranda', 'PublicController@index')->name('beranda');

// kehadiran
Route::get('/kehadiran', 'Sekolah\SekolahKehadiranController@index')->name('sekolah.kehadiran');
Route::delete('/kehadiran/{id}/delete', 'Sekolah\SekolahKehadiranController@destroy')->name('sekolah.kehadiran.hapus');
Route::get('/kehadiran/{id}', 'Sekolah\SekolahKehadiranController@edit')->name('sekolah.kehadiran.edit');
Route::patch('/kehadiran/{kehadiran}', 'Sekolah\SekolahKehadiranController@update')->name('sekolah.kehadiran.update');
Route::post('/kehadiran/tambah', 'Sekolah\SekolahKehadiranController@store')->name('sekolah.kehadiran.input');
Route::get('/kehadiran/tambah', 'Sekolah\SekolahKehadiranController@create')->name('sekolah.kehadiran.tambah');

Route::get('/siswa', 'Sekolah\SekolahController@index')->name('siswa');
Route::delete('/siswa/{id}/delete', 'Sekolah\SekolahController@destroy')->name('siswa.delete');
Route::get('/siswa/{id}', 'Sekolah\SekolahController@edit')->name('siswa.edit');
Route::patch('/siswa/{siswa}', 'Sekolah\SekolahController@update')->name('siswa.update');
Route::post('/siswa/tambah', 'Sekolah\SekolahController@store')->name('siswa.input');
Route::get('/siswa/tambah', 'Sekolah\SekolahController@create')->name('siswa.tambah');

Route::get('/prov/sekolah', 'Cabang\CabangDinasController@index')->name('cabang');
Route::get('/prov/sekolah/tambah', 'Cabang\CabangDinasController@create')->name('cabang.tambah');

Route::get('/prov/siswa', 'Cabang\CabangDinasController@getSiswa')->name('cabang.siswa');
Route::get('/prov/kehadiran', 'Cabang\CabangDinasController@getKehadiran')->name('cabang.kehadiran');
