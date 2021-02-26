<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
     protected $fillable = ['id_kota','kode_kecamatan','nama_kecamatan'];
     protected $table = "kecamatans";
     public $timestamps = true;
    
     
     public function kecamatan(){
        return $this->hasMany('App\Models\Kecamatan', 'id_kecamatan');
    }


    public function kota(){
        return $this->belongsTo('App\Models\Kota','id_kota');
    }
    
    use HasFactory;
}
