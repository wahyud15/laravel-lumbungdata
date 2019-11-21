<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Metadata;
use Session;

class MetadataController extends Controller
{
    //
    public function ListData()
    {
        $dataList = Metadata::all();
        return view('metadata.list', ['dataList' => $dataList]);
    }
    public function Tambah()
    {
        return view('metadata.tambah');
    }
    public function Simpan(Request $request)
    {
        //dd($request->all());
        $dataMetadata = Metadata::where('nama', '=', $request->nama)->count();
        if ($dataMetadata > 0) {
            $pesan_error = "datanya " . $request->nama . " sudah ada";
            $warna_error = "danger";
        } else {
            $dataMeta = new Metadata();
            $dataMeta->nama = $request->nama;
            $dataMeta->kondef = $request->kondef;
            $dataMeta->kegunaan = $request->kegunaan;
            $dataMeta->interpretasi = $request->interpretasi;
            $dataMeta->save();

            $pesan_error = "berhasil di simpan";
            $warna_error = "primary";
        }
        Session::flash('message', $pesan_error);
        Session::flash('message_type', $warna_error);
        return redirect()->route('metadata.tambah');
    }
    public function EditData($id)
    {
        $dataMetadata = Metadata::where('id', '=', $id)->first();
        return view('metadata.edit', ['dataMetadata' => $dataMetadata]);
    }
    public function UpdateData(Request $request)
    {
        $dataMeta = Metadata::where('id', '=', $request->id)->count();
        if ($dataMeta > 0) {
            //edit data
            $dataMetadata = Metadata::where('id', '=', $request->id)->first();
            $dataMetadata->nama = $request->nama;
            $dataMetadata->kondef = $request->kondef;
            $dataMetadata->kegunaan = $request->kegunaan;
            $dataMetadata->interpretasi = $request->interpretasi;
            $dataMetadata->update();

            $pesan_error = "Metadata berhasil di update";
            $warna_error = "primary";
        } else {
            //data tidak ada
            $pesan_error = "data tidak ada";
            $warna_error = "danger";
        }
        Session::flash('message', $pesan_error);
        Session::flash('message_type', $warna_error);
        return redirect()->route('metadata.list');
    }
    public function HapusData(Request $request)
    {
        //dd($request->all());
        $dataMeta = Metadata::where('id', '=', $request->id)->count();
        if ($dataMeta > 0) {
            //edit data
            $dataMetadata = Metadata::where('id', '=', $request->id)->first();
            $dataMetadata->delete();

            $pesan_error = "Metadata berhasil di hapus";
            $warna_error = "primary";
        } else {
            //data tidak ada
            $pesan_error = "data tidak ada";
            $warna_error = "danger";
        }
        Session::flash('message', $pesan_error);
        Session::flash('message_type', $warna_error);
        return redirect()->route('metadata.list');
    }
}
