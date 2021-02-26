<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;

class ProvinsiController extends Controller
{

    
    public function index()
    {
        
        $provinsi = Provinsi::latest()->get();
        $res = [
            'success' => true,
            'data'    => $provinsi,
            'message' => 'Data Berhasil Di Tampilkan'   
        ];
        return response()->json($res,200);

    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $provinsi = Provinsi::whereId($id)->first();

        if($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Provinsi',
                'data' => $provinsi
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Provinsi Tidak Ditemukan',
                'data' => ''
            ], 404);
        }
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
