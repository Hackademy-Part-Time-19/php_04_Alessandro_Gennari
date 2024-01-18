<?php

/*
Traccia 3:

Dato il seguente codice di partenza:
class Car {
private $num_telaio;
}
class Fiat extends Car {
protected $license;
protected $name;
}
Completa la classe Fiat con le strutture mancanti e, utilizzando il livello di
severita' che ritieni piu' opportuno, estendi i metodi per stampare a terminale la
seguente frase: “La mia macchina e' Opel, con targa ND 123 OJ e nmero di Telaio
1234“.*/


class Car {
    private $num_telaio;

    public function __construct($num_telaio)
    {
        $this->num_telaio = $num_telaio;
    }

    public function getNumTelaio() {
        return $this->num_telaio;
    }
}

class Fiat extends Car {
    protected $license;
    protected $name;

    public function __construct($name, $license, $num_telaio)
    {
        parent::__construct($num_telaio);
        $this->name = $name;
        $this->license = $license;
    }

    public function printInfo()
    {
        
        echo "La mia macchina è $this->name, con targa $this->license e numero di Telaio " . $this->getNumTelaio() . "\n";
    }
}

$car = new Fiat("Opel", "ND 123 OJ", "1234");

$car->printInfo();

var_dump($car);

?>

