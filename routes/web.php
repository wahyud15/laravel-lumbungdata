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
        Auth::logout();
        return view('login');
});


Route::get('/horizontal', 'Dashboard@showDashboard')
        ->middleware('auth')
        ->name('dashboard');

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

//=======================================
//Tabel Dinamis - Kelola Master Tabel
//=======================================
Route::get('/tabeldinamis/msubjek', 'TabelDinamis@showMsubjek')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.msubjek');

Route::get('/tabeldinamis/getSubjekForEdit', 'TabelDinamis@getSubjekForEdit')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.getSubjekForEdit');

Route::post('/tabeldinamis/editSubjek', 'TabelDinamis@editSubjek')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.editSubjek');

Route::get('/tabeldinamis/mindikator', 'TabelDinamis@showMindikator')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.mindikator');

Route::get('/tabeldinamis/mkarakteristik', 'TabelDinamis@showMkarakteristik')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.mkarakteristik');

Route::get('/tabeldinamis/mbaris', 'TabelDinamis@showMbaris')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.mbaris');

Route::get('/tabeldinamis/mperiode', 'TabelDinamis@showMperiode')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.mperiode');

Route::get('/tabeldinamis/msatuan', 'TabelDinamis@showMsatuan')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.msatuan');

Route::post('/tabeldinamis/addIndikator', 'TabelDinamis@addIndikator')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.addIndikator');

Route::post('/tabeldinamis/addSubjek', 'TabelDinamis@addSubjek')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.addSubjek');

Route::post('/tabeldinamis/addKarakteristik', 'TabelDinamis@addKarakteristik')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.addKarakteristik');

Route::post('/tabeldinamis/addBaris', 'TabelDinamis@addBaris')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.addBaris');

Route::post('/tabeldinamis/addPeriode', 'TabelDinamis@addPeriode')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.addPeriode');

Route::post('/tabeldinamis/addSatuan', 'TabelDinamis@addSatuan')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.addSatuan');

//=======================================
//End Tabel Dinamis - Kelola Master Tabel
//=======================================

//=======================================
//Tabel Dinamis - Mapping Tabel Dinamis
//=======================================
Route::get('/tabeldinamis/showmappingindikator', 'TurunanIndikator@showMappingIndikator')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.showMappingIndikator');

Route::post('/tabeldinamis/mappingindikator', 'TurunanIndikator@mappingIndikator')
        ->middleware('isSuperAdmin')
        ->name('tabeldinamis.mappingIndikator');

//=======================================
//End Tabel Dinamis - Mapping Tabel Dinamis
//=======================================

//=======================================
//Tabel Dinamis - Input Tabel Dinamis
//=======================================
Route::get('/tabeldinamis/input', 'InputTabelDinamis@showInputTabelDinamis')
        ->middleware('auth')
        ->name('tabeldinamis.inputtabeldinamis');

Route::get('/tabeldinamis/getDataIndikator/{id}', 'InputTabelDinamis@getDataIndikator')
        ->middleware('auth')
        ->name('tabeldinamis.getDataIndikator');

Route::post('/tabeldinamis/uploadDataIndikator', 'InputTabelDinamis@uploadDataIndikator')
        ->middleware('auth')
        ->name('tabeldinamis.uploadDataIndikator');

Route::get('/tabeldinamis/setTayangkan/{id}', 'InputTabelDinamis@setTayangkan')
        ->middleware('auth')
        ->name('tabeldinamis.setTayangkan');

Route::get('/tabeldinamis/setTurunTayang/{id}', 'InputTabelDinamis@setTurunTayang')
        ->middleware('auth')
        ->name('tabeldinamis.setTurunTayang');

//=======================================
//End Tabel Dinamis - Input Tabel Dinamis
//=======================================

//=======================================
//Galeri Data
//=======================================
Route::get('/galeridata', 'GaleriData@showGaleriData')
        ->name('galeridata.showGaleriData');

Route::get('/galeridata/viewdata/{id}/{tahun}/{admlevel}', 'GaleriData@viewData')
        ->name('galeridata.viewData');

Route::get('/galeridata/downloaddata/{id}/{tahun}/{admlevel}', 'GaleriData@downloadData')
        ->name('galeridata.downloadData');

//=======================================
//End Galeri Data
//=======================================

Route::get('/data/showupload', 'UploadData@showUploadData')
        ->name('data.showformupload');

Route::get('/data/showdownload', 'ExportData@showDownloadData')
        ->name('data.showformdownload');

Route::post('/data/upload', 'UploadData@uploadData')
        ->name('data.uploaddata');

Route::post('/data/download', 'ExportData@downloadData')
        ->name('data.downloaddata');
//-------------------------
// metadata
//-------------------------
Route::get('/metadata/list', 'MetadataController@ListData')->name('metadata.list');
Route::get('/metadata/tambah', 'MetadataController@Tambah')->name('metadata.tambah');
Route::post('/metadata/simpan', 'MetadataController@Simpan')->name('metadata.simpan');
Route::get('/metadata/edit/{id}', 'MetadataController@EditData')->name('metadata.edit');
Route::post('/metadata/updatedata', 'MetadataController@UpdateData')->name('metadata.update');
Route::post('/metadata/hapus', 'MetadataController@HapusData')->name('metadata.hapus');
//---------------
// end metadata
//---------------