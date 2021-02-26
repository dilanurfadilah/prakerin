<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    protected $fillable = ['id_kelurahan','id_rw'];
    protected $table = "rws";

    public function kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan','id_kelurahan');
    }
     
    public function rw(){
        return $this->hasMany('App\Models\Kasus','id_rw');
    }
    
    use HasFactory;
}
