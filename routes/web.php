<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use LDAP\Result;

Route::get('/', function() {
    return redirect(route('login'));
});
// Route::get('/starter', function() {
//     return view('starter');
// });

Auth::routes(['verify' => true, 'reset' => false]);

Route::middleware('auth', 'verified')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');



    Route::get('/jurusan', 'JurusanController@index')->name('daftarJurusan');

    Route::get('/jurusan/create', 'JurusanController@create')->name('createJurusan');

    Route::post('/jurusan/create', 'JurusanController@store')->name('storeJurusan');

    Route::get('/jurusan/{jurusan}/edit', 'JurusanController@edit')->name('editJurusan');

    Route::post('/jurusan/{jurusan}/edit', 'JurusanController@update')->name('updateJurusan');

    Route::get('/jurusan/{jurusan}/delete', 'JurusanController@destroy')->name('deleteJurusan');





    Route::get('/mapel', 'MataPelajaranController@index')->name('daftarMapel');

    Route::get('/mapel/create', 'MataPelajaranController@create')->name('createMapel');

    Route::post('/mapel/create', 'MataPelajaranController@store')->name('storeMapel');

    Route::get('/mapel/{mataPelajaran}/edit', 'MataPelajaranController@edit')->name('editMapel');

    Route::post('/mapel/{mataPelajaran}/edit', 'MataPelajaranController@update')->name('updateMapel');

    Route::get('/mapel/{mataPelajaran}/delete', 'MataPelajaranController@destroy')->name('deleteMapel');





    Route::get('/siswa', 'SiswaController@index')->name('daftarSiswa');

    Route::get('/siswa/create', 'SiswaController@create')->name('createSiswa');

    Route::post('/siswa/create', 'SiswaController@store')->name('storeSiswa');

    Route::get('/siswa/{siswa}/edit', 'SiswaController@edit')->name('editSiswa');

    Route::post('/siswa/{siswa}/edit', 'SiswaController@update')->name('updateSiswa');

    Route::get('/siswa/{siswa}/delete', 'SiswaController@destroy')->name('deleteSiswa');






    Route::get('profile', 'ProfileController@edit')->name('profile.edit');


    Route::patch('profile', 'ProfileController@update')->name('profile.update');
});
