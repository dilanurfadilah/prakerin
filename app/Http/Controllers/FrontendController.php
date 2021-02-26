<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FrontendController extends Controller
{
    //
    public function index(){
        $positif = DB::table('rws')
        ->select('kasuses.jumlah_positif',
        'kasuses.jumlah_meninggal','kasuses.jumlah_sembuh')
        ->join('kasuses','rws.id','kasuses.id_rw')
        ->sum('kasuses.jumlah_positif');
         $meninggal = DB::table('rws')  
        ->select('kasuses.jumlah_positif',
        'kasuses.jumlah_meninggal','kasuses.jumlah_sembuh')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->sum('kasuses.jumlah_meninggal');
         $sembuh = DB::table('rws')
        ->select('kasuses.jumlah_positif',
        'kasuses.jumlah_meninggal','kasuses.jumlah_sembuh')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->sum('kasuses.jumlah_sembuh');

        return view('frontend.index' , compact('positif', 'meninggal', 'sembuh'));
    }
}
