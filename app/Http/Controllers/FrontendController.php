<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FrontendController extends Controller
{
    //
    public function index(){
        $rws = DB::table('rws')
        ->select('kasuses.jumlah_positif',
        'kasuses.jumlah_meninggal','kasuses.jumlah_sembuh')
        ->join('kasuses','rws.id','kasuses.id_rw')
        ->get();

        $positif = $rws->sum('jumlah_positif');
        $meninggal = $rws->sum('jumlah_meninggal');
        $sembuh = $rws->sum('jumlah_sembuh');
        
     

        return view('frontend.index' , compact('positif', 'meninggal', 'sembuh'));
    }
}
