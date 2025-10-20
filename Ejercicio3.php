<?php 
//Programa para sobre escribir el metodo toString
class IngredienteComprado {
    private string $nombre;
    private float $peso;
    private string $tipo;

    public function __construct(string $nombre, float $peso, string $tipo) {
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->tipo = $tipo;
    }
    public function __toString(): string {
        return "Ingrediente: {$this->nombre}, tipo: {$this->tipo} , peso: {$this->peso}kg";
    }
}
$tomate = new IngredienteComprado("Tomate", 1.5, "Fruta");
$lechuga = new IngredienteComprado("Lechuga",1,"Verdura");
echo "Lista de ingredientes comprados: \n";

echo $tomate."\n";
echo $lechuga."\n";
?>