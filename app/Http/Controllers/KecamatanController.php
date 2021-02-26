<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
    {
        $kecamatan = Kecamatan::with('kota')->get();
        return view('kecamatan.index',compact('kecamatan'));
    }

   
    public function create()
    {
        $kota= Kota::all();
        return view('kecamatan.create',compact('kota'));
    }

    
    public function store(Request $request)
    {

        //VALIDASI
       $request->validate([
        'kode_kecamatan' => 'required|max:4|unique:kecamatans',
        'nama_kecamatan' => 'required|unique:kecamatans',
    ], [
        'kode_kecamatan.required' => 'Kode Harus Di isi!',
        'kode_kecamatan.max' =>  'Kode Maksimal 4 Nomor',
        'kode_kecamatan.unique' => 'Kode Sudah Dipakai',
        'nama_kecamatan.required' => 'Nama Provinsi Harus Di Isi!',
        'nama_kecamatan.unique' => 'Kode Nama Sudah Di Pakai!',
    ]);
        $kecamatan = new Kecamatan; 
        $kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;  
        $kecamatan->id_kota = $request->id_kota; 
        $kecamatan->save();
        return redirect()->route('kecamatan.index')->with(['message'=>'Data Berhasil Dibuat']);
    }

   
    public function show($id)
    {
        $kecamatan = Kecamatan::FindOrFail($id);
        return view('kecamatan.show',compact('kecamatan'));
    }

    public function edit($id)
    {
        $kecamatan = Kecamatan::FindOrFail($id);
        $kota = Kota::all();
        return view('kecamatan.edit',compact('kecamatan','kota'));
    }

    
    public function update(Request $request, $id)
    {
        $kecamatan = Kecamatan::FindOrFail($id);
        $kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->id_kota = $request->id_kota;        
        $kecamatan->save();
        return redirect()->route('kecamatan.index')->with(['message'=>'Data Berhasil Diedit']);
    }

   
    public function destroy($id)
    {
        $kecamatan = Kecamatan::FindOrFail($id)->delete();
        return redirect()->route('kecamatan.index')->with(['message'=>'kota berhasil dihapus']);
    }
}
