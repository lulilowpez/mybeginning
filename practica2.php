<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>PRACTICA 2</h1>
    </header>
    <main>
<h2>Ejercicio 1: Se imprime en pantalla un "Hola Mundo".</h2>
<?php
echo 'Hola Mundo';
?>
<br>
<hr>
<h2> Ejercicio 2: Se carga en una variable la cadena de caracteres “Hola mundo” y luego se imprime por pantalla</h2>
<?php
$saludo= 'Hola Mundo';
echo $saludo;
?>
<br>
<hr>
<h2>Ejercicio 3: Se crea dos variables enteras y se muestra por pantalla, su suma, su resta, su multiplicación, su división
entera y su resto de la división entera</h2>
<?php
$entero1= 25;
$entero2=5;
$suma= $entero1+$entero2;
$resta= $entero1-$entero2;
$multiplicacion= $entero1*$entero2;
$division=$entero1/$entero2;
$resto=$entero1%$entero2;
print "<ul>\n <li>Suma: $suma </li>\n <li>Resta: $resta </li>\n 
              <li>Multiplicación: $multiplicacion </li>\n
              <li>División: $division</li>\n <li>Resto: $resto </li>\n </ul>\n";
?>
<br>
<hr>
<h2>Ejercicio3: Se realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego se imprime por
pantalla.</h2>
<?php
$gc= 20;
$gf= $gc*1.8;
$gf= $gf+32;
echo $gc ,'grados Celsius es igual a:' ,$gf, 'grados Fahrenheit';
?>
<br>
<hr>
<h2>Ejercicio4: Se Implementan algoritmos que permitan:</h2>
<ul> <li>a) Calcular el perímetro y el área de un rectángulo, 
    dado que su base es 18cm y su altura 12cm.</li>
     <li>b)Calcular el perímetro y el área de un círculo dado que su radio
         es de 30cm.</li></ul>;
<?php
$br= 18;
$ar= 12;
$perimr= (($br*2)+($ar*2));
$arear= $br*$ar;
$rc=30;
$areac= (3.14 * ($rc*$rc));
$perimc=(2*3.14*$rc);
print "<ul>\n <li>a) Perímetro del rectangulo: $perimr ; Área del rectángulo: $arear </li>\n 
              <li>a) Perímetro del círculo: $perimc ; Área del círculo: $areac </li>\n </ul>\n";
?>
    </main>
    <footer>
        <h3>Luciana Belén López</h3>
    </footer>
</body>
</html>