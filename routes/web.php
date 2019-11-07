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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vertikal', function () {
    return view('vertikal');
});

Route::get('/horizontal', function () {
    return view('horizontal');
});

Route::get('/loginmenu', function () {
    return view('login');
})->name('loginpage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//=======================================
//Tabel Dinamis - Kelola Master Tabel
//=======================================
Route::get('/tabeldinamis/msubjek', 'TabelDinamis@showMsubjek')
        ->name('tabeldinamis.msubjek');

Route::get('/tabeldinamis/mindikator', 'TabelDinamis@showMindikator')
        ->name('tabeldinamis.mindikator');

Route::get('/tabeldinamis/mkarakteristik', 'TabelDinamis@showMkarakteristik')
        ->name('tabeldinamis.mkarakteristik');

Route::get('/tabeldinamis/mbaris', 'TabelDinamis@showMbaris')
        ->name('tabeldinamis.mbaris');

Route::get('/tabeldinamis/mperiode', 'TabelDinamis@showMperiode')
        ->name('tabeldinamis.mperiode');

Route::get('/tabeldinamis/msatuan', 'TabelDinamis@showMsatuan')
        ->name('tabeldinamis.msatuan');

//=======================================
//End Tabel Dinamis - Kelola Master Tabel
//=======================================

//=======================================
//Tabel Dinamis - Input Tabel Dinamis
//=======================================
Route::get('/tabeldinamis/input', 'InputTabelDinamis@showInputTabelDinamis')
        ->name('tabeldinamis.inputtabeldinamis');

Route::post('/tabeldinamis/getListMindikator', 'InputTabelDinamis@getListMindikator')
        ->name('tabeldinamis.getListMindikator');

//=======================================
//End Tabel Dinamis - Input Tabel Dinamis
//=======================================

Route::get('/data/showupload', 'UploadData@showUploadData')
        ->name('data.showformupload');

Route::get('/data/showdownload', 'ExportData@showDownloadData')
        ->name('data.showformdownload');

Route::post('/data/upload', 'UploadData@uploadData')
        ->name('data.uploaddata');

Route::post('/data/download', 'ExportData@downloadData')
        ->name('data.downloaddata');
