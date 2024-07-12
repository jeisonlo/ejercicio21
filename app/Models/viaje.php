<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viaje extends Model
{
    use HasFactory;


    public function viajero(){

        return $this->belongsTo('App\Models\viajero');
    }
    public function destino(){

        return $this->belongsTo('App\Models\destino');
    }
    public function origen(){

        return $this->belongsTo('App\Models\origen');
    }
}
