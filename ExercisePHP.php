<!DOCTYPE html>
<html>
<body>

<?php
class IceCream{
  // atributos
  var $base;
  var $altura;
  var $sabor;
  var $temperatura; 
  
  function IceCream($a, $b, $s, $t){
    $this-> base = $b;
    $this-> altura = $a;
    $this-> sabor = $s;
    $this-> temperatura = $t;
  }
  // Metodo1
  function Derretir(){
   if ($this->temperatura > 0){
    echo "El helado de: ". $this->sabor . " se esta derritiendo";
   } else {
    echo "El helado ya esta derritido";
   }
  }
  // Metodo 2 
  function Tamaño(){
  $tamaño = ($this->base + $this->altura);
  echo "El tamaño del helado es: ".tamaño;
  }
}

$objeto = new IceCream(2,9,"Vainilla",4);
$objeto->Derretir();
?> 

</body>
</html>
