<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/pembeli','PembeliController@index')->name('pembeli');
Route::get('/pembeli/create','PembeliController@create')->name('pembeli/create');
Route::post('/pembeli/store','PembeliController@store')->name('pembeli/store');
Route::get('/pembeli/edit/{id}','PembeliController@edit')->name('pembeli/edit');
Route::post('/pembeli/update/{id}','PembeliController@update')->name('pembeli/update');
Route::get('/pembeli/destroy/{id}','PembeliController@destroy')->name('pembeli/destroy');

Route::get('/jenis','JenisController@index')->name('jenis');
Route::get('/jenis/create','JenisController@create')->name('jenis/create');
Route::post('/jenis/store','JenisController@store')->name('jenis/store');
Route::get('/jenis/edit/{id}','JenisController@edit')->name('jenis/edit');
Route::post('/jenis/update/{id}','JenisController@update')->name('jenis/update');
Route::get('/jenis/destroy/{id}','JenisController@destroy')->name('jenis/destroy');

Route::get('/pengguna','PenggunaController@index')->name('pengguna');
Route::get('/pengguna/create','PenggunaController@create')->name('pengguna/create');
Route::post('/pengguna/store','PenggunaController@store')->name('pengguna/store');
Route::get('/pengguna/edit/{id}','PenggunaController@edit')->name('pengguna/edit');
Route::post('/pengguna/update/{id}','PenggunaController@update')->name('pengguna/update');
Route::get('/pengguna/destroy/{id}','PenggunaController@destroy')->name('pengguna/destroy');

Route::get('/barang','BarangController@index')->name('barang');
Route::get('/barang/create','BarangController@create')->name('barang/create');
Route::post('/barang/store','BarangController@store')->name('barang/store');
Route::get('/barang/edit/{id}','BarangController@edit')->name('barang/edit');
Route::post('/barang/update/{id}','BarangController@update')->name('barang/update');
Route::get('/barang/destroy/{id}','BarangController@destroy')->name('barang/destroy');

Route::get('/penjualan','PenjualanController@index')->name('penjualan');
Route::get('/penjualan/create','PenjualanController@create')->name('penjualan/create');
Route::get('/pembeli/cari','PenjualanController@cari')->name('pembeli/cari');
Route::get('/barang/carii','PenjualanController@carii')->name('barang/carii');
Route::post('/simpan_transaksi','PenjualanController@simpan_transaksi')->name('simpan_transaksi');
Route::get('/penjualan/edit/{id}','PenjualanController@edit')->name('penjualan/edit');
Route::get('/penjualan/destroy/{id}','PenjualanController@destroy');
Route::get('/penjualan/show/{id}','PenjualanController@show')->name('/penjualan/show');
// Route::get('/penjualan/struk','PenjualanController@struk')->name('/penjualan/struk');
Route::get('/simpan_transaksi/struk','PenjualanController@simpan_transaksi')->name('simpan_transaksi/struk');

Route::get('/pencarian','PencarianController@index')->name('penjualan/pencarian');


Route::get('/laporan','LaporanController@index')->name('laporan_bulan');
Route::get('/laporan/cetak','LaporanController@cetak')->name('laporan/cetak');