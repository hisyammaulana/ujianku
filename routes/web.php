<?php

Auth::routes();

Route::get('/', 'PublicController@landing')->name('landing');

Route::get('/home', 'Dev\DeveloperController@index')->name('home');

Route::get('/beranda', 'PublicController@index')->name('beranda');

// kehadiran user sekolah
Route::get('/kehadiran', 'Sekolah\SekolahKehadiranController@index')->name('sekolah.kehadiran');
Route::delete('/hapus/{id}/kehadiran', 'Sekolah\SekolahKehadiranController@destroy')->name('sekolah.kehadiran.hapus');
Route::get('/kehadiran/edit/{id}', 'Sekolah\SekolahKehadiranController@edit')->name('sekolah.kehadiran.edit');
Route::patch('/kehadiran/{kehadiran}', 'Sekolah\SekolahKehadiranController@update')->name('sekolah.kehadiran.update');
Route::post('/kehadiran/tambah/siswa', 'Sekolah\SekolahKehadiranController@store')->name('sekolah.kehadiran.input');
Route::get('/kehadiran/tambah', 'Sekolah\SekolahKehadiranController@create')->name('sekolah.kehadiran.tambah');
Route::get('/search', 'Sekolah\SekolahKehadiranController@search')->name('siswa.search');

Route::get('/siswa', 'Sekolah\SekolahController@index')->name('siswa');
Route::delete('/siswa/delete/{id}', 'Sekolah\SekolahController@destroy')->name('siswa.delete');
Route::get('/siswa/edit/{id}', 'Sekolah\SekolahController@edit')->name('siswa.edit');
Route::patch('/siswa/{siswa}', 'Sekolah\SekolahController@update')->name('siswa.update');
Route::post('/siswa/tambah', 'Sekolah\SekolahController@store')->name('siswa.input');
Route::get('/siswa/tambah', 'Sekolah\SekolahController@create')->name('siswa.tambah');

// sekolah eksport import
Route::get('/siswa/import', 'Sekolah\SekolahController@getImport')->name('siswa.import');
Route::post('/siswa/import/excel', 'Sekolah\SekolahController@import_excel')->name('siswa.import.excel');
Route::get('/export/siswa', 'Sekolah\SekolahDataController@exportExcelAll')->name('siswa.export.all');
Route::get('/export/jk/siswa', 'Sekolah\SekolahDataController@exportExcelGender')->name('siswa.export.jk');


Route::get('/cab/beranda', 'Cabang\CabangDinasController@home')->name('cabang.beranda');
Route::get('/cab/sekolah', 'Cabang\CabangDinasController@index')->name('cabang');
Route::delete('/cab/{id}/sekolah', 'Cabang\CabangDinasController@destroy')->name('cabang.sekolah.delete');
Route::get('/cab/sekolah/edit/{id}', 'Cabang\CabangDinasController@edit')->name('cabang.sekolah.edit');
Route::patch('/cab/sekolah/{sekolah}', 'Cabang\CabangDinasController@update')->name('cabang.sekolah.update');
Route::get('/cab/sekolah/tambah', 'Cabang\CabangDinasController@create')->name('cabang.tambah');
Route::post('/cab/sekolah/add', 'Cabang\CabangDinasController@store')->name('cabang.tambah.input');

Route::get('/cab/siswa', 'Cabang\CabangDinasController@getSiswa')->name('cabang.siswa');
Route::get('/cab/kehadiran', 'Cabang\CabangDinasController@getKehadiran')->name('cabang.kehadiran');

// cabang eksport import
Route::get('/cab/data/sekolah', 'Cabang\CabangDataController@getSekolah')->name('cabang.data.sekolah');
Route::get('/cab/data/siswa', 'Cabang\CabangDataController@getSiswa')->name('cabang.data.siswa');
Route::get('/cab/data/kehadiran', 'Cabang\CabangDataController@getKehadiran')->name('cabang.data.kehadiran');
Route::post('/cab/data/sekolah/import', 'Cabang\CabangDataController@import_sekolah')->name('cabang.data.sekolah.import');
Route::get('/cab/export/sekolah', 'Cabang\CabangDataController@exportAllSchools')->name('cabang.sekolah.export.all');
Route::get('/cab/export/rayon/sekolah', 'Cabang\CabangDataController@exportRayonSchools')->name('cabang.sekolah.export.rayon');
Route::get('/cab/export/rayon/siswa', 'Cabang\CabangDataController@exportRayonStudents')->name('cabang.siswa.export.rayon');
Route::post('/getsiswarayon', 'Cabang\CabangDataController@getSiswaByRayon')->name('cab.sekolah.rayon');


// admin provinsi
Route::get('/admin/cabang', 'Admin\AdminController@getCabang')->name('admin.cabang');
Route::get('/admin/sekolah', 'Admin\AdminController@getSekolah')->name('admin.sekolah');
Route::get('/admin/siswa', 'Admin\AdminController@getSiswa')->name('admin.siswa');
// pelajaran
Route::get('/admin/pelajaran', 'Admin\PelajaranController@index')->name('admin.pelajaran');
Route::post('/admin/pelajaran/add', 'Admin\PelajaranController@store')->name('admin.pelajaran.post');
Route::delete('/admin/pelajaran/{id}/delete', 'Admin\PelajaranController@destroy')->name('admin.pelajaran.delete');
