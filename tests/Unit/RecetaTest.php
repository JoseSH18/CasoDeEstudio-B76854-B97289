<?php

namespace Tests\Unit;

use App\Models\Receta;
use App\Models\Ingrediente;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RecetaTest extends TestCase
{
    use RefreshDatabase;
    /**
* A basic unit test example.
*
* @return void
*/
public function test_una_receta_tiene_muchos_ingredientes()
{
   $receta = new Receta();
   $receta->Titulo = "Pasta";
   $receta->Porcion = 2;
   $receta->Instrucciones = "Comer";
   $receta->save();
   $ingrediente = new Ingrediente();
   $ingrediente->receta_id = 1;
   $ingrediente->Unidad = "Gramos";
   $ingrediente->Cantidad = 2;
   $ingrediente->save();
   $this->assertInstanceOf(Receta::class, $ingrediente->Receta);
}
}
