<?php

// $arreglo_de_frutas = array("Naranja", "Mandarina", "Durazno", "Platano", "Melon");

// echo "for";
// // (For, Foreach) (While, Do while)
//  for($i = 0; $i < 4; $i++){
//      echo "<h1>$arreglo_de_frutas[$i]</h1>";
//  }

//  echo "foreach";
//  foreach($arreglo_de_frutas as $fruta){
//      echo "<h1>$fruta</h1>";
//  }

//Ejercicio 1: Mostrar los 100 primeros numeros pares.
// for($i = 2; $i <= 100; $i+=2){
//      echo "<h3>$i</h3>";
// }

class Cuadrado {
     private $lado = 0;

     public function __construct($lado = 4) {
          $this->lado = $lado;
     }


     public function getArea(){
          return $this ->lado * $this ->lado;
     }
}

//Instanciacion
$cuadrado1 = new Cuadrado (5); //nstanciar un objeto de la clase 'Cuadrado'

echo "El area del cuadrado es: " . $cuadrado1->getArea();
?>
