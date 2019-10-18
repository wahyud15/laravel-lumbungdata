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
        $c_baris = 0;
        $c_karakteristik = 0;
        $c_periode = 0;

        foreach ($rows as $row) 
        {
            //Continue Interation until baris index <= max baris value
            if(++$c_baris <= $this->max_baris)
            {
                //Start Inserting into DB if baris index equal to 5
                // if($c_baris >= 4)
                // {
                //     $isUpSuccess = DataTmpl1::where('id_indikator', $tid_indikator)
                //                     ->where('tahun', $ttahundata)
                //                     ->where('nu_karakteristik', ++$c_karakteristik)
                //                     ->where('nu_baris', ++$c_baris)
                //                     ->where('nu_periode', ++$c_periode)
                //                     ->update(['data' => $data]);

                // }

                // echo $c_baris;
                }
        }

        echo $c_baris;
    }

}
