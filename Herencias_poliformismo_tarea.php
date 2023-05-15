<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// FINAL - 
// ABSTRACT -
// STATIC -

abstract class Departamentos{
    protected $municipios;
    public $habitantes;
    public static $nacionalidad = "guatemaltecos";

    public function __construct($municipios, $habitantes){
        $this->municipios = $municipios;
        $this->habitantes = $habitantes;
    }

    final public static function getNacionalidad(){
        echo "TODAS LAS PERSONAS SON DE ORIGEN:" . self::$nacionalidad;
    }

    public function getInfo() : void{
        echo "El departamento tiene:  $this->municipios municipios, y tiene un aproximado de: $this->habitantes habitantes";
    }

    public function getMunicipios(): void{
        echo "El departamento tiene: $this->municipios municipios";
    }
}

class AltaVerapaz extends Departamentos{
    public $idiomas;

    public function __construct($idiomas = 0, $municipios = 0, $habitantes = 0)
    {
        $this->idiomas = $idiomas;
        parent::__construct($municipios, $habitantes);
    }

    public function getInfo() : void{
        echo "El departamento de Alta Verapaz tiene: $this->municipios municipios, con un aproximado de: $this->habitantes habitantes y $this->idiomas idiomas, y son : " . parent::$nacionalidad;
    }
}

class Guatemala extends Departamentos{
    public function getInfo() : void{
        echo "Guatemala tiene $this->municipios municipios, con un aproximado de: $this->habitantes de habitantes";
    }
}

#$departamento = new Departamento(22,10000000);

$AltaVerapazCity = new AltaVerapaz(4,16,150000);
// $carroToyota->ruedas = 6;
$AltaVerapazCity->getInfo();
echo "<br>";
$GuatemalaCity = new Guatemala(10,1000000);
$GuatemalaCity->getInfo();