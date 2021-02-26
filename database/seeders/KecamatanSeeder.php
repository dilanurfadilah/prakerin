<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('kecamatans')->insert([
                ['id' => 8790, 'id_kota' => 9401,'kode_kecamatan' => 8400,'nama_kecamatan' => 'KORONTALO' ],
                // ['id' => 8791, 'id_kota' => 9402,'kode_kecamatan' => 8401,'nama_kecamatan' => 'KORONTALO' ],
                
            ]);
            }
}
