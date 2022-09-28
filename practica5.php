<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica5_backend</title>
</head>
<body>
    <header>
        <h1>PRACTICA 4_BACKEND</h1>
    </header>
    <main>
<h2>Ejercicio 1: Se muestran los números del 1 al 100.</h2>
<?php
$nro= 1;
do {print "<p>$nro</p>\n";
    $nro++;}
while ($nro<101)
?>
<br>
<hr>
<h2> Ejercicio 2: Se muestran los números del 100 al 1</h2>
<?php
$nro= 100;
do {print "<p>$nro</p>\n";
    $nro--;}
while ($nro>0)
?>
<br>
<hr>
<h2>Ejercicio 3: Se muestran los números pares del 1 al 100.</h2>
<?php
for ($n3=2; $n3<101; $n3=$n3+2)
 {print "<p>$n3</p>\n";}
?>
<br>
<hr>
<h2>Ejercicio4: Se muestran los números impares del 1 al 100.</h2>
<?php
for ($n3=1; $n3<101; $n3= $n3+2) {print "<p>$n3</p>\n";}
?>
<br>
<hr>
<h2>Ejercicio 5: Se muestra la suma de los números de 1 a 20.</h2>
<?php
$nro= 1;
$cont=2;
do { $nro=$nro+ $cont; $cont++;}
while ($cont<21);
print "<p>$nro</p>\n"
?>
<br>
<hr>
<h2>Ejercicio 6: Se muestra la suma de números pares de 1 a 20.</h2>
<?php
$nro= 0;
$cont=2;
do { $nro=$nro+ $cont; $cont=$cont+2;}
while ($cont<22);
print "<p>$nro</p>\n"
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