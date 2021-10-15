<h1>Tipos de datos en PHP </h1>

<?php
  //declaracion de variables
  //tipo de dato: String
  $nombre = "Ernesto Tamay";
  //tipo de dato: String
  $genero = 'H';
  
  //tipo de dato: Float
  $estatura = 1.71;
  
  //tipo de dato: Integer
  $edad = 36;

  //tipo de dato: Boolean
  $usasLentes = true;

  $saltoLinea = "<br>";
  
  //impresion en pantalla
  //la union de cadenas se llama concatenación
  //la concatenación se realiza usando el simbolo .
  echo "Nombre: ".$nombre.$saltoLinea; 
  echo "Genero: ".$genero.$saltoLinea;
  echo "Estatura: ".$estatura.$saltoLinea;
  echo "Edad: ".$edad.$saltoLinea;
  echo "Lentes: ".$usasLentes.$saltoLinea;

?>