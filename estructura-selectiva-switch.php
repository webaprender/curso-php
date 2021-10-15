<h1>Estructura Selectiva Switch</h1>
<?php
  //tipo de dato integer: 
  $opcionConmutador = 4;

  echo "Opcion seleccionada: ".$opcionConmutador."<br>";

  switch ($opcionConmutador){
    case 1:
      echo "Compras";
      break;
    case 2:
      echo "Finanzas";
      break;
    case 3:
      echo "Sistemas";
      break;

    default:
      echo "Comunicando con un ejecutivo";
    }
?>