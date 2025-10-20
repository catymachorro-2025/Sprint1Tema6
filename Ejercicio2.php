<?php

class Informacion{
    public function mostrarInformacionMetodo(): void{
        echo "<br>";
        echo "Metodo: ".__METHOD__."<br>";
        echo "Esta Linea es la linea ".__LINE__." dentro del metodo <br>";

}
    public function mostrarInformacionArchivo(): void {
       echo "<br>";
       echo "La ruta y el nombre del archivo son: ".__FILE__."<br>";
       echo "\nEl directorio del archivo es: ".__DIR__."<br>";
       echo "\nEstamos dentro de la clase: ".__CLASS__."<br>";
    }
}

$informacion = new Informacion();
$informacion->mostrarInformacionMetodo();
$informacion->mostrarInformacionArchivo();

?>