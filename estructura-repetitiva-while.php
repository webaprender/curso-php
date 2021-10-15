<?php
$inicio = 1;
$fin = 100;
$saltoLinea = "<br>";

echo "vamos a contar desde el 1 hasta el 100".$saltoLinea;

echo "1".$saltoLinea;
echo "2".$saltoLinea;
echo "3".$saltoLinea;
echo "¿en serio? seguiras usando muchos echo".$saltoLinea;

//variable contador
$inicio = 4;

//mientras (4 <= 100) {
//  hacer
//}
while ($inicio <= $fin){
  //imprimir el valor de variable inicio
  //la primera vez es igual a 4
  echo $inicio.$saltoLinea;
  
  //contador $inicio+=1 ==> $inicio = $inicio + 1
  $inicio+=1;
}

?>