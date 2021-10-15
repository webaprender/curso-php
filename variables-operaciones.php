<?php
  $numero1 = 10;
  $numero2 = 2;
  $numero3 = 144.0;

  //las 7 operaciones matematicas fundamentales
  $suma = $numero1 + $numero2;
  $resta = $numero1 - $numero2;
  $producto = $numero1 * $numero2;
  $division = $numero1 / $numero2;
  $potencia = $numero1 ** $numero2;
  $raiz = sqrt($numero3);
  $logaritmo = log($numero3);
  
  //la union de cadenas de texto se llama concatenación
  //la concatenación se realiza con simbolo punto 
  //seguido de otra cadena o variable
  echo "7 operaciones matematicas fundamentales"."<br>";
  echo "Suma $numero1 + $numero2 = $suma"."<br>";
  echo "Resta $numero1 - $numero2 = $resta"."<br>";
  echo "Producto $numero1 x $numero2 = $producto"."<br>";
  echo "División $numero1 / $numero2 = $division"."<br>";
  echo "Potencia $numero1 ** $numero2 = $potencia"."<br>";
  echo "Raiz cuadrada de $numero3 = $raiz"."<br>";
  echo "Logaritmo natural de $numero3 = $logaritmo"."<br>";

?>