<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\Kasus;
use DB;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
     
         public $data = [];
         public function global(){

        $response = Http::get('https://api.kawalcorona.com')->json();
        foreach ($response as $data => $val) {
            $raw = $val['attributes'];
            $res = [
                'Negara' => $raw['Country_Region'],
                'Positif' => $raw['Confirmed'],
                'Sembuh' => $raw['Recovered'],
                'Meninggal' => $raw['Deaths']
            ];
            array_push($this->data, $res);
        }
        $data = [
            'Success' => true,
            'Data' => $this->data,
            'Message' => 'Berhasil'
        ];
        return response()->json($data,200);
         }
       
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

                 $res = [
                     'success' => true,
                     'Data'             => 'Data Kasus Indonesia',
                     'Jumlah Positif'   => $positif,
                     'Jumlah Meninggal' => $meninggal,
                     'Jumlah Sembuh'    => $sembuh,
                     'message' => 'Data Kasus Ditampilkan'
                 ];

                 return response()->json($res,200);
    }
    public function show($id)
    {
        $positif = DB::table('provinsis')
            ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasuses', 'kasuses.id_rw', '=', 'rws.id')
            ->select('kasuses.jumlah_positif')
            ->where('provinsis.id', $id)
            ->sum('kasuses.jumlah_positif');

        $sembuh = DB::table('provinsis')
            ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasuses', 'kasuses.id_rw', '=', 'rws.id')
            ->select('kasuses.jumlah_sembuh')
            ->where('provinsis.id', $id)
            ->sum('kasuses.jumlah_sembuh');

        $meninggal = DB::table('provinsis')
            ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasuses', 'kasuses.id_rw', '=', 'rws.id')
            ->select('kasuses.jumlah_meninggal')
            ->where('provinsis.id', $id)
            ->sum('kasuses.jumlah_meninggal');


        $provinsi = provinsi::whereId($id)->first();
        $res = [
            'success'           => true,
            'Data'              => 'Data Kasus Berdasarkan Provinsi',
            'Kode Provinsi'     => $provinsi['kode_provinsi'],
            'Provinsi'          => $provinsi['nama_provinsi'],
            'Jumlah Positif'    => $positif,
            'Jumlah Sembuh'     => $sembuh,
            'Jumlah Meninngal'  => $meninggal,
            'message'           => 'Data Kasus di Tampilkan'
        ];
        return response()->json($res, 200);
    }

            public function provinsi3(){
                 $nampil = DB::table('provinsis')
                ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('nama_provinsi',
                      DB::raw('sum(kasuses.jumlah_positif) as jumlah_positif'),
                      DB::raw('sum(kasuses.jumlah_meninggal) as jumlah_meninggal'),
                      DB::raw('sum(kasuses.jumlah_sembuh) as jumlah_sembuh'))
                ->groupBy('nama_provinsi')
                ->get();
 
                $res = [
                    'success' => true,
                    'Data'    => $nampil,
                    'message' => 'Data Kasus Provinsi Ditampilkan'
                ];
                 return response()->json($res,200);
            }


            public function dkota(){
                $kota = DB::table('kotas')
                        ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                        ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                        ->join('kasuses','kasuses.id_rw','=','rws.id')
                        ->select('nama_kota',
                            DB::raw('sum(kasuses.jumlah_positif) as jumlah_positif'),
                            DB::raw('sum(kasuses.jumlah_meninggal) as jumlah_meninggal'),
                            DB::raw('sum(kasuses.jumlah_sembuh) as jumlah_sembuh'))
                        ->groupBy('nama_kota')
                        ->get();
 
                $res = [
                    'success' => true,
                    'Data'    => $kota,
                    'message' => 'Data Kasus Provinsi Ditampilkan'
                ];
                 return response()->json($res,200);
            }
            public function dkecamatan(){
                $kecamatan = DB::table('kecamatans')
                        ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                        ->join('kasuses','kasuses.id_rw','=','rws.id')
                        ->select('nama_kecamatan',
                            DB::raw('sum(kasuses.jumlah_positif) as jumlah_positif'),
                            DB::raw('sum(kasuses.jumlah_meninggal) as jumlah_meninggal'),
                            DB::raw('sum(kasuses.jumlah_sembuh) as jumlah_sembuh'))
                        ->groupBy('nama_kecamatan')
                        ->get();
 
                $res = [
                    'success' => true,
                    'Data'    => $kecamatan,
                    'message' => 'Data Kasus Provinsi Ditampilkan'
                ];
                 return response()->json($res,200);
            }
            public function dkelurahan(){
                $kelurahan = DB::table('kelurahans')
                        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                        ->join('kasuses','kasuses.id_rw','=','rws.id')
                        ->select('nama_kelurahan',
                            DB::raw('sum(kasuses.jumlah_positif) as jumlah_positif'),
                            DB::raw('sum(kasuses.jumlah_meninggal) as jumlah_meninggal'),
                            DB::raw('sum(kasuses.jumlah_sembuh) as jumlah_sembuh'))
                        ->groupBy('nama_kelurahan')
                        ->get();
 
                $res = [
                    'success' => true,
                    'Data'    => $kelurahan,
                    'message' => 'Data Kasus Provinsi Ditampilkan'
                ];
                 return response()->json($res,200);
            }

           
}
    
