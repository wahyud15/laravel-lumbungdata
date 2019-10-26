<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataTmpl1Import;

class UploadData extends Controller
{
    public function showUploadData(){
        return view('data.uploadExcel');
    }

    public function uploadData(Request $request)
    {
        $id_indikator = 1;
        $tahundata = '2011';

        Excel::import(new DataTmpl1Import($id_indikator, $tahundata), request()->file('fupload'));

    }
}
