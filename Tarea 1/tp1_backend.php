<!-- Crear un archivo “tp1_backend.php” y realizar los siguientes ejercicios:
1. Imprima por pantalla: “Hola mundo”. 
2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.
3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
entera y el resto de la división entera.
4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
pantalla.
5. Implementar algoritmos que permitan:
a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.  -->

<?php

//1. Imprima por pantalla: “Hola mundo”.
$saludo = "Hola mundo en PHP";
echo $saludo;
echo "<br>";

//////////////////////////////////////////////////////////////

//2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.
$Hola="Hola mundo";
echo $Hola;
echo "<br>";

///////////////////////////////////////////////////////////////

//3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
$numero1=10;
$numero2=15;
$suma= $numero1 + $numero2 ;

echo "El resultado de la suma es: " . $suma;
echo "<br>";

$numero3=10;
$numero4=15;
$resta= $numero3 - $numero4;

echo "El resultado de la resta es: ". $resta;
echo "<br>";

$numero5=10;
$numero6=15;
$multiplicacion= $numero5 * $numero6;

echo "El resultado de la Multiplicacion es: ". $multiplicacion;
echo "<br>";

$numero7=10;
$numero8=15;
$divicion= $numero7 / $numero8;

echo "El resultado de la Divicion es: ". $divicion;
echo "<br>";


//////////////////////////////////////////////////////////////////

//4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.

$gradoCelsius=20;
$multiCelsius=1.8;
$adicionalConvercion=32;
$resultado = $gradoCelsius * $multiCelsius + $adicionalConvercion ;

echo "Los grados Faherenheit son: ". $resultado;
echo "<br>";

//////////////////////////////////////////////////////////////////

//a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.

$base= 18; // 18cm
$altura= 12; // 12cm
$perimetro= $base*2 + $altura*2;

echo "El perimetro del rectangulo es ". $perimetro;
echo "<br>";

//////////////////////////////////////////////////////////////////

//b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.

$radio= 30; // 30 cm
$numero_pi= 3.1416; // PI

$perimetro2= 2 * $numero_pi * $radio;
$area= $radio * $radio * $numero_pi;

echo "El perimetro del circulo es" . $perimetro2;

echo "<br>";

echo "El area del circulo es" . $area;

?>