<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica6_backend</title>
</head>
<body>
    <header>
        <h1>PRACTICA 6_BACKEND</h1>
    </header>
    <main>
<h2>Ejercicio 1: Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h2>
<?php
$array=["2","4","6","8","10"];
print_r($array)
?>
<br>
<hr>
<h2>Ejercicio 2: Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la 
matriz. Mostrar el esquema del array con print_r()</h2>
<?php
$array=["Pedro","Ana","34","1"];
print_r($array)
?>
<br>
<hr>
<h2>Ejercicio 3: Crear un array asociativo e introducir los siguientes valores:
    Nombre: Pedro. Apellido: Torres. Dirección: Av. Mayor 3703. Teléfono: 1122334455</h2>
<?php
$array=['nombre'=>"Pedro",'Apellido'=>"Torres", 'Direccion'=>"Av. Mayor 3703",'Teleono:'=>"1122334455"]
?>
<br>
<hr>
<h2>Ejercicio4: Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y 
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array. 
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</h2>
<?php
$array=["Madrid","Barcelona", "Londres","New York", "Los Angeles", "Chicago"];

foreach ($array as $indice=> $valor) 
{ print "La ciudad con el indice $indice tiene el nombre : $valor \n"; }
?>
<br>
<hr>
<h2>Ejercicio 5: Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, 
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago. 
Ejemplo: El índice de Madrid es MD.</h2>

<?php
$array=['MD'=>"Madrid",'BCL'=>"Barcelona", 'LD'=>"Londres",
'NY'=>"New York",'LA'=> "Los Angeles", 'CCG'=>"Chicago"];

foreach ($array as $indice=> $valor) 
{ print "El indice $indice es : $valor \n"; }
?>
<br>
<hr>
    </main>
    <footer>
        <h3>Luciana Belén López</h3>
        <hr>
    </footer>
</body>
</html>