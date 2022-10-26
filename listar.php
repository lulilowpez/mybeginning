<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda_Ropa</title>
    
</head>
<body>
                <section>
                <H2>Tienda de Ropa</H2>
                     <a href="index.html"><button class="parrafo">inicio</button></a>
                     <a href="agregar.html" target="_blank"><button class="parrafo">agregar ropa</button></a>
               </section>

               <section>
               <h2>Lista de ropa</h2>
    <h3>La siguiente lista muestra los datos de la ropa actualmente en stock</h3>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Tipo de prenda</th>
        <th>Marca</th>
        <th>Talle</th>
        <th>Precio</th>
    </tr>
<?php
$conexion=mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tiendaderopa");
$consulta= "SELECT*FROM ropa";
$datos= mysqli_query ($conexion, $consulta);
while ( $reg =mysqli_fetch_array($datos)) { ?>
 <tr>
    <td><?php echo $reg ['id'];?></td>
    <td><?php echo $reg ['tipodeprenda'];?></td>
    <td><?php echo $reg ['marca'];?></td>
    <td><?php echo $reg ['talle'];?></td>
    <td><?php echo $reg ['precio'];?></td>
 </tr>
<?php } ?>
</table>
</section>
</body>
</html>