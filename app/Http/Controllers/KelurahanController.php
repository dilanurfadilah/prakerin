<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

  
    public function index()
    {
        $kelurahan = Kelurahan::with('kecamatan')->get();
        return view('kelurahan.index',compact('kelurahan'));
    }

    
    public function create()
    {
        $kecamatan = Kecamatan::all();
        return view('kelurahan.create',compact('kecamatan'));
    }


    public function store(Request $request)
    {

        //VALIDASI
       $request->validate([
        'nama_kelurahan' => 'required|max:4|unique:kelurahans',
        'nama_kelurahan' => 'required|unique:kelurahans',
    ], [
        'nama_kelurahan.required' => 'Kode Harus Di isi!',
        'nama_kelurahan.max' =>  'Kode Maksimal 4 Nomor',
        'nama_kelurahan.unique' => 'Kode Sudah Dipakai',
        'nama_kecamatan.required' => 'Nama Provinsi Harus Di Isi!',
        'nama_kecamatan.unique' => 'Nama Sudah Di Pakai!',
    ]);
        $kelurahan = new Kelurahan; 
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;  
        $kelurahan->id_kecamatan= $request->id_kecamatan; 
        $kelurahan->save();
        return redirect()->route('kelurahan.index')->with(['message'=>'Data Berhasil Dibuat']);
    }


    public function show($id)
    {
        $kelurahan = Kelurahan::FindOrFail($id);
        return view('kelurahan.show',compact('kelurahan'));
    }

    public function edit($id)
    {
        $kelurahan = Kelurahan::FindOrFail($id);
        $kecamatan = Kecamatan::all();
        return view('kelurahan.edit',compact('kelurahan','kecamatan'));
    }

    public function update(Request $request, $id)
    {
        $kelurahan = Kelurahan::FindOrFail($id);
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->id_kecamatan = $request->id_kecamatan;        
        $kelurahan->save();
        return redirect()->route('kelurahan.index')->with(['message'=>'Data Berhasil Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelurahan= Kelurahan::FindOrFail($id)->delete();
        return redirect()->route('kelurahan.index')->with(['message'=>'kota berhasil dihapus']);
    }
}
