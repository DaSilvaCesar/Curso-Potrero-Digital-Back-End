<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
<?php
//1. Mostrar los números del 1 al 100.

$i=1;
while ($i < 100) {
  print  "<p> $i </p>\n";
  $i++;
}
echo "Fin Ejercicio 1<br>";
//2. Mostrar los números del 100 al 1.

$numero=100;

for ($numero = 100; $numero >= 1; $numero--) {
  print "<p> $$numero </p>\n";
}
echo "Fin Ejercicio 2<br>";
//3. Mostrar los números pares del 1 al 100.
//4. Mostrar los números impares del 1 al 100
//Aca muestro los 2 ejercios con un If si tiene resto es impar si no tiene es par .

for ($NumPares = 1; $NumPares <= 100; $NumPares++) {
    if ($NumPares % 2 == 0) {
        echo "El $NumPares es par <br>\n";
    } else {
        echo "El número $NumPares es impar <br>\n";
    }
}  
echo "Fin Ejercicio 3<br>";

//5. Mostrar la suma de los números de 1 a 20.

$suma = 0;

for ($numero = 1; $numero <= 20; $numero++) {
    $suma += $numero;
}

echo "La suma de los números del 1 al 20 es: $suma";
//6. Mostrar la suma de números pares de 1 a 20.

$sumaPar = 0;

for ($numero = 1; $numero <= 20; $numero++) {
    if ($numero % 2 == 0) {
        echo "El número $numero es par <br>\n";
    } else {
        echo "El número $numero es impar <br>\n";
    }
    $sumaPar += $numero;
}

echo "La suma de los números pares del 1 al 20 es: $sumaPar";

?>

  
</body>