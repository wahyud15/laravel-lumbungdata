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

Route::post('/tabeldinamis/addIndikator', 'TabelDinamis@addIndikator')
        ->name('tabeldinamis.addIndikator');

Route::post('/tabeldinamis/addSubjek', 'TabelDinamis@addSubjek')
        ->name('tabeldinamis.addSubjek');

Route::post('/tabeldinamis/addKarakteristik', 'TabelDinamis@addKarakteristik')
        ->name('tabeldinamis.addKarakteristik');

Route::post('/tabeldinamis/addBaris', 'TabelDinamis@addBaris')
        ->name('tabeldinamis.addBaris');

Route::post('/tabeldinamis/addPeriode', 'TabelDinamis@addPeriode')
        ->name('tabeldinamis.addPeriode');

Route::post('/tabeldinamis/addSatuan', 'TabelDinamis@addSatuan')
        ->name('tabeldinamis.addSatuan');

//=======================================
//End Tabel Dinamis - Kelola Master Tabel
//=======================================

//=======================================
//Tabel Dinamis - Input Tabel Dinamis
//=======================================
Route::get('/tabeldinamis/input', 'InputTabelDinamis@showInputTabelDinamis')
        ->name('tabeldinamis.inputtabeldinamis');

Route::get('/tabeldinamis/getDataIndikator/{id}', 'InputTabelDinamis@getDataIndikator')
        ->name('tabeldinamis.getDataIndikator');

Route::post('/tabeldinamis/uploadDataIndikator', 'InputTabelDinamis@uploadDataIndikator')
        ->name('tabeldinamis.uploadDataIndikator');

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
