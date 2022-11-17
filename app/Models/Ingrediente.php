<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    public function Receta()
    {
        return $this->belongsTo(Receta::class);
    }
    use HasFactory;
}
