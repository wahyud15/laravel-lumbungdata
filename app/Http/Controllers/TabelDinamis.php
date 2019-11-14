<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Msubjek;
use App\Mindikator;
use App\Mkarakteristik;
use App\Mkarakteristikitems;
use App\Mbaris;
use App\Mbarisitems;
use App\Mperiode;
use App\Mperiodeitems;
use App\Msatuan;
use App\Mseriesleveltabel;
use App\TransaksiIndikator;
use App\User;
use App\AdministrativeLevel;
use App\Mtahundata;

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

    public function addSubjek(Request $request)
    {
        $nama_subjek = $request->tambahSubjekNamaSubjek;
        $isInsertSuccess = Msubjek::firstOrCreate(
            ['nama_subjek' => $nama_subjek]
        );

        $msubjek = Msubjek::all();
        // return view('tabeldinamis.msubjek', ['msubjek' => $msubjek]);

        return redirect()->route('tabeldinamis.msubjek', ['msubjek' => $msubjek]);
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
            'msatuan_id' => $msatuan_id,
            ]
        );

        $msubjek = Msubjek::all();
        $mindikator = Mindikator::all();
        $mkarakteristik = Mkarakteristik::all();
        $mbaris = Mbaris::all();
        $mperiode = Mperiode::all();
        $msatuan = Msatuan::all();

        // return view('tabeldinamis.mindikator', 
        //             [
        //                 'msubjek' => $msubjek,
        //                 'mindikator' => $mindikator,
        //                 'mkarakteristik' => $mkarakteristik,
        //                 'mbaris' => $mbaris,
        //                 'mperiode' => $mperiode,
        //                 'msatuan' => $msatuan,
        //             ]);

        return redirect()->route('tabeldinamis.mindikator', 
        [
            'msubjek' => $msubjek,
            'mindikator' => $mindikator,
            'mkarakteristik' => $mkarakteristik,
            'mbaris' => $mbaris,
            'mperiode' => $mperiode,
            'msatuan' => $msatuan,
        ]);

    }

    public function addKarakteristik(Request $request)
    {
        $nama_karakteristik = $request->tambahKarakteristikNamaKarakteristik;
        $items_karakteristik = $request->itemskarakteristik;

        Mkarakteristik::firstOrCreate(
            ["nama_karakteristik" => $nama_karakteristik]
        );

        $id_karakteristik = Mkarakteristik::where('nama_karakteristik', $nama_karakteristik)->first();

        for($x=0; $x < count($items_karakteristik); $x++)
        {
            Mkarakteristikitems::insert(
                ['no_urut' => $x+1, 'nama_items' => $items_karakteristik[$x], 'mkarakteristik_id'=>$id_karakteristik->id]
            );
        }

        $mkarakteristik = Mkarakteristik::all();
        // return view('tabeldinamis.mkarakteristik', ['mkarakteristik' => $mkarakteristik]);

        return redirect()->route('tabeldinamis.mkarakteristik', ['mkarakteristik' => $mkarakteristik]);
        
    }

    public function addBaris(Request $request)
    {
        $nama_baris = $request->tambahBarisNamaBaris;
        $items_baris = $request->itemsbaris;

        Mbaris::firstOrCreate(
            ["nama_baris" => $nama_baris]
        );

        $id_baris = Mbaris::where('nama_baris', $nama_baris)->first();

        for($x=0; $x < count($items_baris); $x++)
        {
            Mbarisitems::insert(
                ['no_urut' => $x+1, 'nama_items' => $items_baris[$x], 'mbaris_id'=>$id_baris->id]
            );
        }

        $mbaris = Mbaris::all();
        // return view('tabeldinamis.mbaris', ['mbaris' => $mbaris]);

        return redirect()->route('tabeldinamis.mbaris', ['mbaris' => $mbaris]);
    }

    public function addPeriode(Request $request)
    {
        $nama_periode = $request->tambahPeriodeNamaPeriode;
        $items_periode = $request->itemsperiode;

        Mperiode::firstOrCreate(
            ["nama_periode" => $nama_periode]
        );

        $id_periode = Mperiode::where('nama_periode', $nama_periode)->first();

        for($x=0; $x < count($items_periode); $x++)
        {
            Mperiodeitems::insert(
                ['no_urut' => $x+1, 'nama_items' => $items_periode[$x], 'mperiode_id'=>$id_periode->id]
            );
        }

        $mperiode = Mperiode::all();
        // return view('tabeldinamis.mperiode', ['mperiode' => $mperiode]);

        return redirect()->route('tabeldinamis.mperiode', ['mperiode' => $mperiode]);
    }

    public function addSatuan(Request $request)
    {
        $nama_satuan = $request->tambahSatuanNamaSatuan;

        Msatuan::firstOrCreate(
            ["nama_satuan" => $nama_satuan]
        );

        $msatuan = Msatuan::all();
        // return view('tabeldinamis.msatuan', ['msatuan' => $msatuan]);

        return redirect()->route('tabeldinamis.msatuan', ['msatuan' => $msatuan]);
    }

}
