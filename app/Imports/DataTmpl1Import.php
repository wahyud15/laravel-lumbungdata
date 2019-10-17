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

        // $this->max_baris = Mbarisitems::where('id_indikator', $id_indikator)
        //                     ->where('tahun', $tahundata)
        //                     ->max('nu_baris');

        // $this->max_periode = Mindikator::where('id_indikator', $id_indikator)
        //                     ->where('tahun', $tahundata)
        //                     ->max('nu_periode');

        // $this->max_karakteristik = Mindikator::where('id_indikator', $id_indikator)
        //                     ->where('tahun', $tahundata)
        //                     ->max('nu_karakteristik');
    
    }

    public function collection(Collection $rows)
    {
        $c_baris = 0;
        $c_karakteristik = 0;
        $c_periode = 0;

        foreach ($rows as $row) 
        {
            // foreach ($row as $data)
            // {
            //     DataTmpl1::where('id_indikator', $tid_indikator)
            //                 ->where('tahun', $ttahundata;)
            //                 ->where('nu_karakteristik', )
            //                 ->where('nu_baris', )
            //                 ->where('nu_periode', )
            //                 ->update(['data' => $data]);
            // }
            ++$c_baris;

            if($c_baris == 5){
                
                dd($row);
            }
            
        }
    }

}
