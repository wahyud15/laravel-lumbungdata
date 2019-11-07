<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Msubjek;
use App\Mindikator;

class InputTabelDinamis extends Controller
{
    public function showInputTabelDinamis()
    {
        $msubjek = Msubjek::all();
        return view('tabeldinamis.inputtabeldinamis', ['msubjek' => $msubjek]);
    }

    public function getListMindikator(Request $request)
    {
        $mindikator = Mindikator::where('msubjek_id', "=", $request->id_subjek)->get();

        return $mindikator->toJson();
    }
}
