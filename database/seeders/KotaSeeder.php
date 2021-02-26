<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kotas')->insert([
            ['id' => 9401, 'id_provinsi' => 135,'kode_kota' => 9401,'nama_kota' => 'BANDA ACEH' ],
            ['id' => 9402, 'id_provinsi' => 136,'kode_kota' => 9402,'nama_kota' => 'MANADO'],
            ['id' => 9403, 'id_provinsi' => 137,'kode_kota' => 9403,'nama_kota' => 'PADANG'],
            ['id' => 9404, 'id_provinsi' => 138,'kode_kota' => 9404,'nama_kota' => 'PEKANBARU'],
            ['id' => 9405, 'id_provinsi' => 139,'kode_kota' => 9405,'nama_kota' => 'BATAM'],
            ['id' => 9406, 'id_provinsi' => 140,'kode_kota' => 9406,'nama_kota' => 'JAMBI'],
            ['id' => 9407, 'id_provinsi' => 141,'kode_kota' => 9407,'nama_kota' => 'PALEMBANG'],
            ['id' => 9408, 'id_provinsi' => 142,'kode_kota' => 9408,'nama_kota' => 'PANGKAL PINANG'],
            ['id' => 9409, 'id_provinsi' => 143,'kode_kota' => 9409,'nama_kota' => 'BENGKULU'],
            ['id' => 9410, 'id_provinsi' => 144,'kode_kota' => 9410,'nama_kota' => 'BANDAR LAMPUNG'],
            ['id' => 9411, 'id_provinsi' => 145,'kode_kota' => 9411,'nama_kota' => 'KOTA ADMINISTRASI PUSAT'],
            ['id' => 9412, 'id_provinsi' => 146,'kode_kota' => 9412,'nama_kota' => 'SERANG'],
            ['id' => 9413, 'id_provinsi' => 147,'kode_kota' => 9413,'nama_kota' => 'BANDUNG'],
            ['id' => 9414, 'id_provinsi' => 148,'kode_kota' => 9414,'nama_kota' => 'PEKALONGAN'],
            ['id' => 9415, 'id_provinsi' => 149,'kode_kota' => 9415,'nama_kota' => 'YOGYAKARTA'],
            ['id' => 9416, 'id_provinsi' => 150,'kode_kota' => 9416,'nama_kota' => 'MALANG'],
            ['id' => 9417, 'id_provinsi' => 151,'kode_kota' => 9417,'nama_kota' => 'DENPASAR'],
            ['id' => 9418, 'id_provinsi' => 152,'kode_kota' => 9418,'nama_kota' => 'MATARAM'],
            ['id' => 9419, 'id_provinsi' => 153,'kode_kota' => 9419,'nama_kota' => 'KUPANG'],
            ['id' => 9420, 'id_provinsi' => 154,'kode_kota' => 9420,'nama_kota' => 'PONTIANAK'],
            ['id' => 9421, 'id_provinsi' => 155,'kode_kota' => 9421,'nama_kota' => 'PALANGKARAYA'],
            ['id' => 9422, 'id_provinsi' => 156,'kode_kota' => 9422,'nama_kota' => 'BANJARMASIN'],
            ['id' => 9423, 'id_provinsi' => 157,'kode_kota' => 9423,'nama_kota' => 'BALIK PAPAN'],
            ['id' => 9424, 'id_provinsi' => 158,'kode_kota' => 9424,'nama_kota' => 'TARAKAN'],
            ['id' => 9425, 'id_provinsi' => 159,'kode_kota' => 9425,'nama_kota' => 'BITUNG'],
            ['id' => 9426, 'id_provinsi' => 160,'kode_kota' => 9426,'nama_kota' => 'GORONTALO'],
            ['id' => 9427, 'id_provinsi' => 161,'kode_kota' => 9427,'nama_kota' => 'PALU'],
            ['id' => 9428, 'id_provinsi' => 162,'kode_kota' => 9428,'nama_kota' => 'BUKIT TINGGI'],
            ['id' => 9429, 'id_provinsi' => 163,'kode_kota' => 9429,'nama_kota' => 'MAKASAR'],
            ['id' => 9430, 'id_provinsi' => 164,'kode_kota' => 9430,'nama_kota' => 'BAU-BAU'],
            ['id' => 9431, 'id_provinsi' => 165,'kode_kota' => 9431,'nama_kota' => 'AMBON'],
            ['id' => 9432, 'id_provinsi' => 166,'kode_kota' => 9432,'nama_kota' => 'TERNATE'],
            ['id' => 9433, 'id_provinsi' => 167,'kode_kota' => 9433,'nama_kota' => 'SORONG'],
            ['id' => 9434, 'id_provinsi' => 168,'kode_kota' => 9434,'nama_kota' => 'JAYAPURA'],
        ]);
    }
}
