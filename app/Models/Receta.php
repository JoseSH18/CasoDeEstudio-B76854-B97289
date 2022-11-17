<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    public function Ingredientes()
    {
        return $this->hasMany(Ingrediente::class);
    }
    use HasFactory;
}
