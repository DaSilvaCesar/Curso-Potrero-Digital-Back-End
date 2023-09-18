<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

<?php

//1. Crear una variable n y validar que sea un número positivo.

$n=1;


if(0 < $n) {
  echo "Es es numero positivo <br/>";
}

//2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10

if($n >1 && $n <10) {
  echo  "Se encuentra en el rango solicitado .";
}else {
  echo "No se encuentran en el rango solicitado , vuelva a insertar otro numero <br/>";
}

//Crear una variable n y validar que sea un número mayor a 10 o menor a 2.


if ($n>10 || $n<2) {
  echo  "La variale se encuentra en el rango solicitado <br/>";
}

/*Crear dos variables, una con nombre numero1 y otra con el nombre de numero2.

Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta.

Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división entera y el resto de la división. 

Si numero1 y numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.*/

$numero1=5;
$numero2=6;

  
if ($numero1 > $numero2) {
  $suma = $numero1 + $numero2;
  $resta = $numero1 - $numero2;
  echo "la suma de las 2 variables es" . $suma ."<br>";
  echo "La resta de las 2 variables es " .$resta . "<br>";
  
}elseif ($numero2 > $numero1){
  $multiplicacion = $numero2 * $numero1;
  $divicion = $numero2 / $numero1;
  $resto = $numero2 % $numero1;
  
  echo "La multiplicacion es " . $multiplicacion ."<br>";
  echo "La divicion es " . $divicion ."<br>";
  echo "El resto de la divicion es " . $resto ."<br>";

}else {
  echo "Los numeros son iguales ";
}



?>
  </body>
</html>