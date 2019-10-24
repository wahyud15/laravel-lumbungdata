<?php

namespace App\Exports;

use App\DataTmpl1;
use App\Mbaris;
use App\Mbarisitems;
use App\Mindikator;
use App\Mkarakteristik;
use App\Mkarakteristikitems;
use App\Mperiode;
use App\Mperiodeitems;
use App\Msatuan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DataTmpl1Export implements FromView
{

    public function __construct()
    {

    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $id_indikator = 1;
        $tahundata = '2011';

        $indId = Mindikator::where('id', $id_indikator)
                    ->get();

        $this->max_baris = Mbarisitems::where('mbaris_id', $indId[0]->mbaris_id)
                    ->max('no_urut');

        $barisitems = Mbarisitems::where('mbaris_id', $indId[0]->mbaris_id)->get();

        $this->max_karakteristik = Mkarakteristikitems::where('mkarakteristik_id', $indId[0]->mkarakteristik_id)
                    ->max('no_urut');

        $karakteristikitems = Mkarakteristikitems::where('mkarakteristik_id', $indId[0]->mkarakteristik_id)->get();

        $this->max_periode = Mperiodeitems::where('mperiode_id', $indId[0]->mperiode_id)
                    ->max('no_urut');

        $periodeitems = Mperiodeitems::where('mperiode_id', $indId[0]->mperiode_id)->get();

        $data = DataTmpl1::where('id_indikator', $id_indikator)
                            ->where('tahun', $tahundata)
                            ->get();
        
        return view('data.exportTmpl1',[
            'max_baris' => $this->max_baris,
            'barisitems' => $barisitems,
            'max_karakteristik' => $this->max_karakteristik,
            'karakteristikitems' => $karakteristikitems,
            'max_periode' => $this->max_periode,
            'periodeitems' => $periodeitems,
            'dataitems' => $data,
        ]);

    }
}
