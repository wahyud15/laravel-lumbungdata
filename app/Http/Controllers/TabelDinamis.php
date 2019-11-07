<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Msubjek;
use App\Mindikator;

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
}
