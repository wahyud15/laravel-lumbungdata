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
use App\Transaksiindikator;
use App\Imports\DataTmpl2NewImport;
use App\Imports\DataTmpl1NewImport;

class InputTabelDinamis extends Controller
{
    public function showInputTabelDinamis()
    {
        // $mindikator = Mindikator::all();
        // return view('tabeldinamis.listindikator', ['mindikator' => $mindikator]);

        $turunanIndikator = Transaksiindikator::all();
        return view('tabeldinamis.listindikator', ['turunanIndikator' => $turunanIndikator]);
    }

    public function showMappingTabel()
    {
        $transaksiindikator = Mindikator::all();
        return view('tabeldinamis.listtransaksiindikator', ['transaksiindikator' => $transaksiindikator]);
    }

    public function getDataIndikator($id)
    {
        // $mindikator = Mindikator::where('id', "=", $id)->first();
        $turunanIndikator = Transaksiindikator::where('id', $id)->first();
        return view('tabeldinamis.uploaddatatabel', ['turunanIndikator' => $turunanIndikator]);
    }

    public function uploadDataIndikator(Request $request)
    {
        $id_indikator = $request->uploaddataidindikator;
        $tahundata = $request->uploaddatatahun;
        $administrativeLevel = $request->uploaddataadministrativelevel;

        //Import Data Into Database
        // Excel::import(new DataTmpl1Import($id_indikator, $tahundata), request()->file('uploaddatafile'));
        if($administrativeLevel == 1)
        {
            Excel::import(new DataTmpl1NewImport($id_indikator, $tahundata), request()->file('uploaddatafile'));
        }

        if($administrativeLevel == 2)
        {
            Excel::import(new DataTmpl2NewImport($id_indikator, $tahundata), request()->file('uploaddatafile'));
        }
        

        //Get Data Parameter
        $turunanIndikator = TransaksiIndikator::where('id', $id_indikator)->where('tahundata',$tahundata)->first();
        $indId = Mindikator::where('id', $turunanIndikator->mindikator_id)
                                ->get();
        $max_baris = Mbarisitems::where('mbaris_id', $indId[0]->mbaris_id)->max('no_urut');
        $barisitems = Mbarisitems::where('mbaris_id', $indId[0]->mbaris_id)->get();
        $max_karakteristik = Mkarakteristikitems::where('mkarakteristik_id', $indId[0]->mkarakteristik_id)->max('no_urut');
        $karakteristikitems = Mkarakteristikitems::where('mkarakteristik_id', $indId[0]->mkarakteristik_id)->get();
        $max_periode = Mperiodeitems::where('mperiode_id', $indId[0]->mperiode_id)->max('no_urut');
        $periodeitems = Mperiodeitems::where('mperiode_id', $indId[0]->mperiode_id)->get();
        // $data = DataTmpl1New::where('id_indikator', $id_indikator)
        //                     ->where('tahun', $tahundata)
        //                     ->get();
        
        return view('tabeldinamis.viewuploadedtable',[
            'id_indikator' =>  $turunanIndikator->id,
            'madministrativelevel_id' => $turunanIndikator->madministrativelevel_id,
            'nama_indikator' => $turunanIndikator->nama_transaksi_indikator,
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
