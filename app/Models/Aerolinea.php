<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aerolinea extends Model
{
    public function Avions()
    {
        return $this->hasMany(Avion::class);
    }
    use HasFactory;
}
