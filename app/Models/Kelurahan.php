<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $fillable = ['id_kecamatan','nama_kelurahan'];
    protected $table = "kelurahans";


     public function kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan', 'id_kecamatan');
    }

    public function rw(){
        return $this->hasMany('App\Models\Rw', 'id_kelurahan');
    }
    
    use HasFactory;
}


     
     
    
    
     
    