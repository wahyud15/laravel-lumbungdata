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
        $msubjek = Msubjek::all();
        $mindikator = Mindikator::all();
        $mkarakteristik = Mkarakteristik::all();
        $mbaris = Mbaris::all();
        $mperiode = Mperiode::all();
        $msatuan = Msatuan::all();

        return view('tabeldinamis.mindikator', 
                    [
                        'msubjek' => $msubjek,
                        'mindikator' => $mindikator,
                        'mkarakteristik' => $mkarakteristik,
                        'mbaris' => $mbaris,
                        'mperiode' => $mperiode,
                        'msatuan' => $msatuan,
                    ]);
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

    public function addIndikator(Request $request)
    {
        $nama_indikator = $request->tambahIndikatorNamaIndikator;
        $msubjek_id = $request->tambahIndikatorSubjek;
        $mkarakteristik_id = $request->tambahIndikatorKarakteristik;
        $mbaris_id = $request->tambahIndikatorBaris;
        $mperiode_id = $request->tambahIndikatorPeriode;
        $msatuan_id = $request->tambahIndikatorSatuan;

        $isInsertSuccess = Mindikator::firstOrCreate(
            ['nama_indikator' => $nama_indikator],
            ['msubjek_id' => $msubjek_id , 
            'mkarakteristik_id' => $mkarakteristik_id, 
            'mbaris_id' => $mbaris_id, 
            'mperiode_id' => $mperiode_id, 
            'msatuan_id' => $msatuan_id
            ]
        );


        $msubjek = Msubjek::all();
        $mindikator = Mindikator::all();
        $mkarakteristik = Mkarakteristik::all();
        $mbaris = Mbaris::all();
        $mperiode = Mperiode::all();
        $msatuan = Msatuan::all();

        return view('tabeldinamis.mindikator', 
                    [
                        'msubjek' => $msubjek,
                        'mindikator' => $mindikator,
                        'mkarakteristik' => $mkarakteristik,
                        'mbaris' => $mbaris,
                        'mperiode' => $mperiode,
                        'msatuan' => $msatuan,
                    ]);
    }
}
