<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica3</title>
</head>
<body>
    <header>
        <h1>PRACTICA 3</h1>
    </header>
    <main>
<h2>Ejercicio 1: Se crea una variable n y se valida que sea un número positivo.</h2>
<?php
$nrop= -10;
if ($nrop>0 or $nrop==0) {echo 'El número ingresado efectivamente es positivo.';}
else {echo 'Por favor, ingrese un número positivo a la variable para continuar.';};
?>
<br>
<hr>
<h2> Ejercicio 2: Se crea una variable n y se valida que sea un número mayor a 1 y menor a 10.</h2>
<?php
$n= 5;
if ($n>1 and $n<10) {echo 'El número ingresado efectivamenre es mayor a 1 y menor a 10.';}
 else {echo 'Por favor, ingrese un número que sea mayor a 1 y menor a 10 a la variable para continuar.';};
?>
<br>
<hr>
<h2>Ejercicio 3: Se crea una variable n y se valida que sea un número mayor a 10 o menor a 2.</h2>
<?php
$n3= 10;
if ($n3>10 or $n3<2) {echo 'El número ingresado en la variable es mayor a 10 o menor a 2';}
else {echo 'Por favor, ingrese en la variable un número mayor a 10 o menor a 2';};
?>
<br>
<hr>
<h2>Ejercicio4: Se crea dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es 
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1, 
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y 
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</h2>
<?php
$numero1= 35;
$numero2= 35;
if ($numero1>$numero2) {
    $s=$numero1+$numero2;
    $r=$numero1-$numero2;
    print "<ul>\n 
    <li> Suma de la variable numero1 y numero2: $s</li>\n
    <li> Resta de la variable numero1 y numero2: $r</li>\n 
    </ul>\n";}
    elseif ($numero2>$numero1) {
        $m=$numero2*$numero1;
        $de= intdiv($numero2,$numero1);
        $rde= $numero2%$numero1;
        print "<ul>\n
        <li> Multiplicación de la variable numero2 y numero1: $m </li>\n
        <li> División entera de la variable numero2 y numero1: $de </li>\n 
        <li> Resto de la división entre numero2 y numero1: $rde </li>\n</ul>\n";}
        else {echo 'Los números ingresados son iguales';};
?>
<br>
<hr>
    </main>
    <footer>
        <h3>Luciana Belén López</h3>
    </footer>
</body>
</html>