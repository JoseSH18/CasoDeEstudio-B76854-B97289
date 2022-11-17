<?php

class Mamifero{
    public int $peso;
    public int $altura;
    public string $genero;
    public string $habitat;

    public function TipoDeMamifero($tipo)
    {
        echo 'tipo: ' . $tipo;
    }
}

class Prototerio extends Mamifero{
    private string $huevo;

}

class Metaterio extends Mamifero{

}

class Euterio extends Mamifero{

}

class Primate extends Euterio{

}

class Hominido extends Primate{

}

$animal = new Prototerio();

$animal->TipoDeMamifero(get_class($animal));
?>