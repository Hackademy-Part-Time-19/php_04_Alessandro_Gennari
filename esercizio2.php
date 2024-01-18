<?php
/*
Traccia 2:

Data questo semplice schema di classificazione animale
crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici
regole:
le classi non devono avere attributi;
ogni classe avra' un metodo specifico protected per stampare la sua
specializzazione;
non puoi realizzare metodi definiti public per stampare il risultato;
l’unico metodo public ammesso e' il costrutture.
Il risultato atteso sara':
$magikarp = new Fish();
//Nel terminale visaulizzerete:
Sono un animale Vertebrato
Sono un animale a Sangue Freddo
Splash!*/

class Animal {
    public function __construct() {
        // Il costruttore è l'unico metodo pubblico ammesso
    }

    public function displaySpecialization() {
        $this->printSpecialization();
    }

    protected function printSpecialization() {
        echo "Sono un animale Vertebrato\n";
    }
}

class Vertebrate extends Animal {
    protected function printSpecialization() {
        parent::printSpecialization();
    }
}

class WarmBlooded extends Vertebrate {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "Sono un animale a Sangue Caldo\n";
    }
}

class Mammal extends WarmBlooded {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "Sono un mammifero\n";
    }
}

class Bird extends WarmBlooded {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "Sono un uccello\n";
    }
}

class ColdBlooded extends Vertebrate {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "Sono un animale a Sangue Freddo\n";
    }
}

class Fish extends ColdBlooded {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "Splash!\n";
    }
}

class Reptile extends ColdBlooded {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "Sono un rettile\n";
    }
}

class Amphibian extends ColdBlooded {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "Sono un anfibio\n";
    }
}

$magikarp = new Fish();
$magikarp->displaySpecialization();


?>