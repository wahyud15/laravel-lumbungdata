<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mindikator;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataTmpl1Import;
use App\DataTmpl1;
use App\Mbaris;
use App\Mbarisitems;
use App\Mkarakteristik;
use App\Mkarakteristikitems;
use App\Mperiode;
use App\Mperiodeitems;
use App\Msatuan;

class InputTabelDinamis extends Controller
{
    public function showInputTabelDinamis()
    {
        $mindikator = Mindikator::all();
        return view('tabeldinamis.listindikator', ['mindikator' => $mindikator]);
    }

    public function getDataIndikator($id)
    {
        $mindikator = Mindikator::where('id', "=", $id)->first();
        return view('tabeldinamis.uploaddatatabel', ['mindikator' => $mindikator]);
    }

    public function uploadDataIndikator(Request $request)
    {
        $id_indikator = $request->uploaddataidindikator;
        $tahundata = $request->uploaddatatahun;

        //Import Data Into Database
        Excel::import(new DataTmpl1Import($id_indikator, $tahundata), request()->file('uploaddatafile'));

        //Get Data Parameter
        $indId = Mindikator::where('id', $id_indikator)->get();
        $max_baris = Mbarisitems::where('mbaris_id', $indId[0]->mbaris_id)->max('no_urut');
        $barisitems = Mbarisitems::where('mbaris_id', $indId[0]->mbaris_id)->get();
        $max_karakteristik = Mkarakteristikitems::where('mkarakteristik_id', $indId[0]->mkarakteristik_id)->max('no_urut');
        $karakteristikitems = Mkarakteristikitems::where('mkarakteristik_id', $indId[0]->mkarakteristik_id)->get();
        $max_periode = Mperiodeitems::where('mperiode_id', $indId[0]->mperiode_id)->max('no_urut');
        $periodeitems = Mperiodeitems::where('mperiode_id', $indId[0]->mperiode_id)->get();
        $data = DataTmpl1::where('id_indikator', $id_indikator)
                            ->where('tahun', $tahundata)
                            ->get();
        
        return view('tabeldinamis.viewuploadedtable',[
            'id_indikator' =>  $id_indikator,
            'nama_indikator' => $indId[0]->nama_indikator,
            'tahun' => $tahundata,
            'judul_baris' => $indId[0]->Mbaris->nama_baris,
            'max_baris' => $max_baris,
            'barisitems' => $barisitems,
            'max_karakteristik' => $max_karakteristik,
            'karakteristikitems' => $karakteristikitems,
            'max_periode' => $max_periode,
            'periodeitems' => $periodeitems,
            // 'dataitems' => $data,
        ]);

    }

}
