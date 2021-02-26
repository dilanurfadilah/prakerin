<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class RwController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
    {
        $rw = Rw::with('kelurahan')->get();
        return view('rw.index',compact('rw'));
    }

   
    public function create()
    {
        $kelurahan = Kelurahan::all();
        return view('rw.create',compact('kelurahan'));
    }


    public function store(Request $request)
    {
        //VALIDASI
        $request->validate([
            'rw' => 'required|unique:rws',
        ], [
            'rw.required' => ' Harus Di isi!',
            'rw.unique' => 'Kode Sudah Di Pakai!',
        ]);

        $rw = new Rw; 
        $rw->rw= $request->rw;  
        $rw->id_kelurahan= $request->id_kelurahan; 
        $rw->save();
        return redirect()->route('rw.index')->with(['message'=>'Data Berhasil Dibuat']);
    }

    
    public function show($id)
    {
        $rw = Rw::FindOrFail($id);
        return view('rw.show',compact('rw'));
    }

   
    public function edit($id)
    {
        $rw= Rw::FindOrFail($id);
        $kelurahan = Kelurahan::all();
        return view('rw.edit',compact('rw','kelurahan'));
    }

    
    public function update(Request $request, $id)
    {
        $rw = Rw::FindOrFail($id);
        $rw->rw = $request->rw;
        $rw->id_kelurahan = $request->id_kelurahan;        
        $rw->save();
        return redirect()->route('rw.index')->with(['message'=>'Data Berhasil Diedit']);
    }

    
    public function destroy($id)
    {
        $rw = Rw::FindOrFail($id)->delete();
        return redirect()->route('rw.index')->with(['message'=>'kota berhasil dihapus']);
    }
}
