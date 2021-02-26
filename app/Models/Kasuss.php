<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasuss extends Model
{
    use HasFactory;

    protected $table = "kasusses";

    public function negara(){
        return $this->belongsTo(Negara::class);
    }
}
