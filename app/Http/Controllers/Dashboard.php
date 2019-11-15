<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransaksiIndikator;
use App\Mindikator;

class Dashboard extends Controller
{
    private $jumlahTurunanIndikator;
    private $jumlahMasterIndikator;
    private $jumlahTurunanIndikatorTayang;
    private $jumlahTurunanIndikatorTerEntri;

    public function showDashboard()
    {
        if(Auth()->user()->IsSuperAdmin())
        {
            $this->jumlahTurunanIndikator = TransaksiIndikator::all()->count();
            $this->jumlahMasterIndikator = Mindikator::all()->count();
            $this->jumlahTurunanIndikatorTayang = TransaksiIndikator::where('status_tayang', 1)->count();
            $this->jumlahTurunanIndikatorTerEntri = TransaksiIndikator::where('status_entri', 1)->count();
        }else{
            $this->jumlahTurunanIndikator = TransaksiIndikator::where('user_id', Auth()->user()->id)->count();
            $this->jumlahMasterIndikator = TransaksiIndikator::where('user_id', Auth()->user()->id)->distinct(['mindikator_id'])->count();
            $this->jumlahTurunanIndikatorTayang = TransaksiIndikator::where('user_id', Auth()->user()->id)->where('status_tayang', 1)->count();
            $this->jumlahTurunanIndikatorTerEntri = TransaksiIndikator::where('user_id', Auth()->user()->id)->where('status_entri', 1)->count();
        }

        return view('horizontal', [
            'jumlahTurunanIndikator' => $this->jumlahTurunanIndikator,
            'jumlahMasterIndikator' => $this->jumlahMasterIndikator,
            'jumlahTurunanIndikatorTayang' => $this->jumlahTurunanIndikatorTayang,
            'jumlahTurunanIndikatorTerEntri' => $this->jumlahTurunanIndikatorTerEntri,
        ]);
    }
}
