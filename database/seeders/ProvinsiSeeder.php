<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsis')->insert([
            ['id' => 135, 'kode_provinsi' => 96,'nama_provinsi' => 'ACEH'],
            ['id' => 136, 'kode_provinsi' => 2,'nama_provinsi' => 'SUMATERA UTARA'],
            ['id' => 137, 'kode_provinsi' => 3,'nama_provinsi' => 'SUMATERA BARAT'],
            ['id' => 138, 'kode_provinsi' => 4,'nama_provinsi' => 'RIAU'],
            ['id' => 139, 'kode_provinsi' => 5,'nama_provinsi' => 'KEPULAUAN RIAU'],
            ['id' => 140, 'kode_provinsi' => 6,'nama_provinsi' => 'JAMBI'],
            ['id' => 141, 'kode_provinsi' => 7,'nama_provinsi' => 'SUMATERA SELATAN'],
            ['id' => 142, 'kode_provinsi' => 8,'nama_provinsi' => 'KEPULAUAN BANGKA BELITUNG'],
            ['id' => 143, 'kode_provinsi' => 9,'nama_provinsi' => 'BENGKULU'],
            ['id' => 144, 'kode_provinsi' => 10,'nama_provinsi' => 'LAMPUNG'],
            ['id' => 145, 'kode_provinsi' => 11,'nama_provinsi' => 'DKI JAKARTA'],
            ['id' => 146, 'kode_provinsi' => 12,'nama_provinsi' => 'BANTEN'],
            ['id' => 147, 'kode_provinsi' => 13,'nama_provinsi' => 'JAWA BARAT'],
            ['id' => 148, 'kode_provinsi' => 14,'nama_provinsi' => 'JAWA TENGAH'],
            ['id' => 149, 'kode_provinsi' => 15,'nama_provinsi' => 'DI YOGYAKARTA'],
            ['id' => 150, 'kode_provinsi' => 16,'nama_provinsi' => 'JAWA TIMUR'],
            ['id' => 151, 'kode_provinsi' => 17,'nama_provinsi' => 'BALI'],
            ['id' => 152, 'kode_provinsi' => 18,'nama_provinsi' => 'NUSA TENGGARA BARAT'],
            ['id' => 153, 'kode_provinsi' => 19,'nama_provinsi' => 'NUSA TENGGARA TIMUR'],
            ['id' => 154, 'kode_provinsi' => 20,'nama_provinsi' => 'KALIMANTAN BARAT'],
            ['id' => 155, 'kode_provinsi' => 21,'nama_provinsi' => 'KALIMANTAN TENGAH'],
            ['id' => 156, 'kode_provinsi' => 22,'nama_provinsi' => 'KALIMANTAN SELATAN'],
            ['id' => 157, 'kode_provinsi' => 23,'nama_provinsi' => 'KALIMANTAN TIMUR'],
            ['id' => 158, 'kode_provinsi' => 24,'nama_provinsi' => 'KALIMANTAN UTARA'],
            ['id' => 159, 'kode_provinsi' => 25,'nama_provinsi' => 'SULAWESI UTARA'],
            ['id' => 160, 'kode_provinsi' => 26,'nama_provinsi' => 'GORONTALO'],
            ['id' => 161, 'kode_provinsi' => 27,'nama_provinsi' => 'SULAWESI TENGAH'],
            ['id' => 162, 'kode_provinsi' => 28,'nama_provinsi' => 'SULAWESI BARAT'],
            ['id' => 163, 'kode_provinsi' => 29,'nama_provinsi' => 'SULAWESI SELATAN'],
            ['id' => 164, 'kode_provinsi' => 30,'nama_provinsi' => 'SULAWESI TENGGARA '],
            ['id' => 165, 'kode_provinsi' => 31,'nama_provinsi' => 'MALUKU'],
            ['id' => 166, 'kode_provinsi' => 32,'nama_provinsi' => 'MALUKU UTARA'],
            ['id' => 167, 'kode_provinsi' => 33,'nama_provinsi' => 'PAPUA BARAT'],
            ['id' => 168, 'kode_provinsi' => 34,'nama_provinsi' => 'PAPUA'],
        ]);
    }
}
