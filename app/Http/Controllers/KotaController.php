<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $kota = Kota::with('provinsi')->get();
        return view('kota.index',compact('kota'));
    }

   
    public function create()
    {
        $provinsi= Provinsi::all();
        return view('kota.create',compact('provinsi'));
    }

  
    public function store(Request $request)
    {
        //VALIDASI
       $request->validate([
        'kode_kota' => 'required|max:4|unique:kotas',
        'nama_kota' => 'required|unique:kotas',
    ], [
        'kode_kota.required' => 'Kode Harus Di isi!',
        'kode_kota.max' =>  'Kode Maksimal 4 Nomor',
        'kode_kota.unique' => 'Kode Sudah Dipakai',
        'nama_kota.required' => 'Nama Provinsi Harus Di Isi!',
        'nama_kota.unique' => 'Nama Sudah Di Pakai!',
    ]);

        $kota = new Kota;
        $kota->kode_kota = $request->kode_kota;
        $kota->nama_kota = $request->nama_kota;
        $kota->id_provinsi = $request->id_provinsi;        
        $kota->save();
        return redirect()->route('kota.index')->with(['message'=>'Data Berhasil Dibuat']);
    }

   
    public function show($id)
    {
        $kota = Kota::FindOrFail($id);
        return view('kota.show',compact('kota'));
    }

    public function edit($id)
    {
        $kota = Kota::FindOrFail($id);
        $provinsi = Provinsi::all();
        return view('kota.edit',compact('kota','provinsi'));
    }

   
    public function update(Request $request, $id)
    {
        $kota = Kota::FindOrFail($id);
        $kota->kode_kota = $request->kode_kota;
        $kota->nama_kota = $request->nama_kota;
        $kota->id_provinsi = $request->id_provinsi;        
        $kota->save();
        return redirect()->route('kota.index')->with(['message'=>'Data Berhasil Diedit']);
    }

   
    public function destroy($id)
    {
        $kota = Kota::FindOrFail($id)->delete();
        return redirect()->route('kota.index')->with(['message'=>'kota berhasil dihapus']);
    }
}
