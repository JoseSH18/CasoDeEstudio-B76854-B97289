<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    public function Aerolinea()
    {
        return $this->belongsTo(Aerolinea::class, 'aerolinea_id');
    }

    public function Vuelos()
    {
        return $this->belongsToMany(Vuelo::class);
    }
    use HasFactory;
}
