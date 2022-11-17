<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{    
    public function Aeropuerto()
    {
        return $this->belongsTo(Aeropuerto::class);
    }
    public function Avions()
    {
        return $this->belongsToMany(Avion::class);
    }
    use HasFactory;
}
