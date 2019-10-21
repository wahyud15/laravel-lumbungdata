<?php

namespace App\Imports;

use App\DataTmpl1;
use App\Mindikator;
use App\Mbarisitems;
use App\Mkarakteristikitems;
use App\Mperiodeitems;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class DataTmpl1Import implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    private $tid_indikator;
    private $ttahundata;
    private $tnu_baris;
    private $tnu_karakteristik;
    private $tnu_periode;

    private $max_baris;
    private $max_periode;
    private $max_karakteristik;

    public function __construct($id_indikator, $tahundata){

        $this->tid_indikator = $id_indikator;
        $this->ttahundata = $tahundata;

        $indId = Mindikator::where('id', $id_indikator)
                                ->get();

        $this->max_baris = Mbarisitems::where('mbaris_id', $indId[0]->mbaris_id)
                            ->max('no_urut');

        $this->max_karakteristik = Mkarakteristikitems::where('mkarakteristik_id', $indId[0]->mkarakteristik_id)
                            ->max('no_urut');

        $this->max_periode = Mperiodeitems::where('mperiode_id', $indId[0]->mperiode_id)
                            ->max('no_urut');

    }

    public function collection(Collection $rows)
    {
        $c_baris = 1;
        $idxCol = 1;

        for($baris=1; $baris < $this->max_baris+4; $baris++)
        {
            if($baris >= 4){
                for($kar=1; $kar <= $this->max_karakteristik; $kar++)
                {
                    for($per=1; $per <= $this->max_periode; $per++)
                    {
                        $isUpSuccess = DataTmpl1::where('id_indikator', $this->tid_indikator)
                                ->where('tahun', $this->ttahundata)
                                ->where('nu_karakteristik', $kar)
                                ->where('nu_baris', $c_baris)
                                ->where('nu_periode', $per)
                                ->update(['data' => $rows[$baris][$idxCol]]);
                        // print_r("$baris "."$kar "."$per ".$rows[$baris][$idxCol]."<br/>");
                        $idxCol++;
                    }
                }
                
            }

            if($baris >= 4)
            {
                $c_baris++;
            }

            $idxCol = 1;
        }


    }

}
