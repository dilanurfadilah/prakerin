<?php

namespace App\Http\Controllers;
use App\Models\Kasus;
use App\Models\Rw;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
    {
        $kasus = Kasus::with('rw.kelurahan.kecamatan.kota.provinsi')->get();
        return view('kasus.index',compact('kasus'));
    }

   
    public function create()
    {
       $rw = Rw::all();
       return view('kasus.create',compact('rw'));
    }

    
    public function store(Request $request)
    {
          $request->validate([
            'jumlah_positif' => 'required',
            'jumlah_meninggal' => 'required',
            'jumlah_sembuh' => 'required',
            'tanggal' => 'required',
          ],[
            'jumlah_positif.required' => 'Jumlah Positif required',
            'jumlah_meninggal.required' => 'Jumlah Positif required',
            'jumlah_sembuh.required' => 'Jumlah Positif required',
            'tanggal.required' => 'Tanggal required',

          ]);

    $kasus = new Kasus();
    $kasus->id_rw            = $request->id_rw;
    $kasus->jumlah_positif   = $request->jumlah_positif;
    $kasus->jumlah_meninggal = $request->jumlah_meninggal;
    $kasus->jumlah_sembuh    = $request->jumlah_sembuh;
    $kasus->tanggal          = $request->tanggal;
    $kasus->save();
    return redirect()->route('kasus.index');
        
    }

   
    public function show($id)
    {
        $kasus = Kasus::FindOrFail($id);
        return view('kasus.show',compact('kasus'));
    }

    public function edit($id)
    {
      $kasus = Kasus::FindOrFail($id);
      $rw = Rw::all();
      return view('kasus.edit',compact('rw','kasus'));
    }

    
    public function update(Request $request, $id)
    {

      $request->validate([
        'jumlah_positif' => 'required',
        'jumlah_meninggal' => 'required',
        'jumlah_sembuh' => 'required',
        'tanggal' => 'required',
      ],[
        'jumlah_positif.required' => 'Jumlah Positif required',
        'jumlah_meninggal.required' => 'Jumlah Positif required',
        'jumlah_sembuh.required' => 'Jumlah Positif required',
        'tanggal.required' => 'Tanggal required',

      ]);
      
    $kasus = Kasus::FindOrFail($id);
    $kasus->id_rw            = $request->id_rw;
    $kasus->jumlah_positif   = $request->jumlah_positif;
    $kasus->jumlah_meninggal = $request->jumlah_meninggal;
    $kasus->jumlah_sembuh    = $request->jumlah_sembuh;
    $kasus->tanggal          = $request->tanggal;
    $kasus->save();
    return redirect()->route('kasus.index');
        
    }
   
    public function destroy($id)
    {
      $kasus = Kasus::FindOrFail($id)->delete();
      return redirect()->route('kasus.index');
    }
}
