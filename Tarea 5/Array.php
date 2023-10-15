<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea N°5</title>
</head>
<body>
    
<?php 
//1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.

$numeros_par = [
    "2",
    "4",
    "6",
    "8",
    "10",
    "12",
    "14",
    "16",
    "18",
    "20",
];

echo "<p>Los primeros 10 números pares son: <br>";
foreach ($numeros_par as $numero) {
    echo $numero . ", <br>";
}
echo "</p>\n";

/*2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r().*/

$array_nombres = ["pedro", "ana", "34", "1"];
print_r($array_nombres);

/*3. Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455*/

$datos=[
'nombre'=>"Pedro",
'apellido'=>"Torres",
'direccion'=>"Av.mayor 3703",
'telefono' => "112233445566778899",
];

/*4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array. 
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.*/

$array_ciudades =["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago" ];

print "<p>La ciudad con el indice 2 tiene el nombre de $array_ciudades[2]<p>\n";


/*5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD. */

$array_ciudades_del_mundo_2 = [
    'ny'=>"New York", 
    'la'=>"Los Angeles",
    'ccg'=>"Chicado",
    'md'=>"Madrid",
];

$ciudad='md';

if (array_key_exists($ciudad, $array_ciudades_del_mundo_2)){
    echo "El indice de Madrid {$array_ciudades_del_mundo_2[$ciudad]} es $ciudad.";
}else {
    echo "el indice de la ciudad $ciudad nose encuentra en el array";
}










?>

</body>
</html>