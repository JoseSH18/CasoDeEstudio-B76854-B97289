<?php
class Libro{
    public $capitulos = [];
    public function agregarCapitulo(Capitulo $capitulo)
    {
        $this->capitulos[] = $capitulo;
        print_r($capitulo);
    }
}
class Capitulo{
    public Parrafo $parrafo;

    public function __construct(Parrafo $parrafo) { 
        $this->parrafo = $parrafo;
    }
}

class Parrafo{
    public Oracion $oracion;

    public function __construct(Oracion $oracion) { 
        $this->oracion = $oracion;
    }
}

class Oracion{
    public $palabras = [];
    public function agregarPalabra(Palabra $palabra)
    {
        $this->palabras[] = $palabra;
    }
}

class Palabra{
public string $palabra;
}

$palabra = new Palabra();
$palabra->palabra = "Hola";
$oracion = new Oracion();
$oracion->agregarPalabra($palabra);
$parrafo = new Parrafo($oracion);
$capitulo = new Capitulo($parrafo);
$libro = new Libro();
$libro->agregarCapitulo($capitulo);

?>