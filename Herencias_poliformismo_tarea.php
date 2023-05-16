<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// FINAL - 
// ABSTRACT -
// STATIC -

#asignacion de la clase padre
abstract class Departamentos{
    protected $municipios;
    public $habitantes;
    private $informacion;
    public static $nacionalidad = "guatemaltecos";
    
    public function __construct(int $municipios = 0, int $habitantes = 0, string $informacion = "confidencial"){
        $this->municipios = $municipios;
        $this->habitantes = $habitantes;
        $this->informacion = $informacion;

    }
    final public static function getNacionalidad(){
        echo "TODAS LAS PERSONAS SON DE ORIGEN:" . self::$nacionalidad;
    }
    private function getInfor() : void {
        $this->informacion;
    }

    public function getInfo() : void{
        echo "El departamento tiene:  $this->municipios municipios, y tiene un aproximado de: $this->habitantes habitantes y su informacion es". $this->informacion. ".";
    }

    public function getMunicipios(): void{
        echo "El departamento tiene: $this->municipios municipios";
    }
    public function getHabitantes(): void{
        echo "El departamento tiene un aproximado de: $this->habitantes habitantes";
    }
}
#asignar los hijos/clases
class AltaVerapaz extends Departamentos{
    public $idiomas;

    public function __construct($idiomas = 0, $municipios = 0, $habitantes = 0 , $informacion = 'confidencial')
    {
        $this->idiomas = $idiomas;
        parent::__construct($municipios, $habitantes, $informacion);
    }

    public function getInfo() : void{
        echo "El departamento de Alta Verapaz tiene: $this->municipios municipios, con un aproximado de: $this->habitantes habitantes y $this->idiomas idiomas, y son : " . self::$nacionalidad;
    }
}

class Guatemala extends Departamentos{

    public $cultura;
    public function __construct($cultura = "sin cultura", $municipios = 0, $habitantes = 0 , $informacion = 'confidencial'){
        $this->cultura = $cultura;
        parent::__construct($municipios, $habitantes, $informacion);
    }
    public function getInfo() : void{
        echo "Guatemala tiene $this->municipios municipios, con un aproximado de: $this->habitantes de habitantes y $this->cultura en su cultura y son ". self::$nacionalidad; ;
    }
}

$AltaVerapazCity = new AltaVerapaz(4,16,150000);
//impresion de las clases.
$AltaVerapazCity->getInfo();
echo "<br>";
$GuatemalaCity = new Guatemala("pluricultura",10,1000000);
$GuatemalaCity->getInfo();