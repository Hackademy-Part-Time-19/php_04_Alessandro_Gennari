<?php
/*
Traccia 1:

Utilizza i principi di OOP ed Ereditarieta' per creare una struttura a classi come la
seguente:
+-|Continent
+-----------|Country
+--------------------|Region
+---------------------------|Province
+------------------------------------|City
+------------------------------------------|Street
Ogni classe avra' un attributo public del tipo:
$nameContinent:
$nameCountry;
$nameRegion;
$nameProvince;
$nameCity;
$nameStreet;
La prima classe genitore avra' la seguente struttura:
class Continent
{
public $nameContinent;
public function __construct($continent)
{
$this->nameContinent = $continent;
}
}
Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo chiamato
getMyCurrentLocation() che stampi a schermo la seguente frase: “Mi trovo in
Europa, Italia, Puglia, Ba, Bari, Strada San Giorgio Martire 2D“*/


class Continent
{
    public $nameContinent;

    public function __construct($continent)
    {
        $this->nameContinent = $continent;
    }
}

class Country extends Continent
{
    public $nameCountry;

    public function __construct($continent, $country)
    {
        parent:: __construct($continent);
        $this->nameCountry = $country;
    }
}

class Region extends Country
{
    public $nameRegion;

    public function __construct($continent, $country, $region)
    { 
        parent:: __construct($continent, $country);
        $this->nameRegion = $region;
    }
}

class Province extends Region
{
    public $nameProvince;

    public function __construct($continent, $country, $region, $province)
    {
        parent:: __construct($continent, $country, $region);
        $this->nameProvince = $province;
    }
}

class City extends Province
{
    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city)
    {
        parent:: __construct($continent, $country, $region, $province);
        $this->nameCity = $city;
    }
}

class Street extends City
{
    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street)
    {
        parent:: __construct($continent, $country, $region, $province, $city);
        $this->nameStreet = $street;        
    }

    public function getMyPosition()
    {
        echo "Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet";
    }
} 

$myPosition = new Street("Europa", "Italia", "Puglia", "Ba", "Bari", "Strada San Giorgio Martire 2D");

$myPosition->getMyPosition();

?>