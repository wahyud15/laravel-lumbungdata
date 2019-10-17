<?php

namespace App\Exports;

use App\DataTmpl1;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataTmpl1Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataTmpl1::all();
    }
}
