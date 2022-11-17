<?php

namespace Tests\Unit;

use App\Models\Aeropuerto;
use App\Models\Vuelo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VueloTest extends TestCase
{
    use RefreshDatabase;
    /**
* A basic unit test example.
*
* @return void
*/
public function test_un_aerpuerto_tiene_muchos_vuelos()
{
   $aeropuerto = new Aeropuerto();
   $aeropuerto->save();
   $vuelo = new Vuelo();
   $vuelo->aeropuerto_id = 1;
   $vuelo->NumVuelo = 12;
   $vuelo->save();



   $this->assertInstanceOf(Aeropuerto::class, $vuelo->Aeropuerto);
}
}
