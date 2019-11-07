<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Msubjek;
use App\Mindikator;
use App\Mkarakteristik;
use App\Mbaris;
use App\Mperiode;
use App\Msatuan;

class TabelDinamis extends Controller
{
    public function showMsubjek()
    {
        $msubjek = Msubjek::all();
        return view('tabeldinamis.msubjek', ['msubjek' => $msubjek]);
    }

    public function showMindikator()
    {
        $mindikator = Mindikator::all();
        return view('tabeldinamis.mindikator', ['mindikator' => $mindikator]);
    }

    public function showMkarakteristik()
    {
        $mkarakteristik = Mkarakteristik::all();
        return view('tabeldinamis.mkarakteristik', ['mkarakteristik' => $mkarakteristik]);
    }

    public function showMbaris()
    {
        $mbaris = Mbaris::all();
        return view('tabeldinamis.mbaris', ['mbaris' => $mbaris]);
    }

    public function showMperiode()
    {
        $mperiode = Mperiode::all();
        return view('tabeldinamis.mperiode', ['mperiode' => $mperiode]);
    }

    public function showMsatuan()
    {
        $msatuan = Msatuan::all();
        return view('tabeldinamis.msatuan', ['msatuan' => $msatuan]);
    }
}
