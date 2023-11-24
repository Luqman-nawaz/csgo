<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boost extends Model
{
    use HasFactory;
    public $guarded = [];   

    public function type(){
        return $this->belongsTo(boosttype::class);
    }
    
}
