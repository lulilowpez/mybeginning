<?php
     $conexion=mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "tiendaderopa");
    $id = $_GET['id'];
    $consulta = "SELECT * FROM ropa WHERE id=$id";
     $respuesta = mysqli_query($conexion, $consulta);
     $datos=mysqli_fetch_array($respuesta);
?>
<html>
    <head>
        <link rel="stylesheet" href="styleindex.css">
        <title>Tienda De Ropa</title>
    </head>
        <body>
              <aside>
                  <nav id="main-nav" aria-label="Main">
                    <h3>Tienda de Ropa</h3>
                       <ul>
                          <li><a href="index.html"><button class="parrafo">inicio</button></a></li>
                       </ul>
                       <h3>Filtros</h3>
                       <ul>
                        <li><a href="nike.php"><button class="parrafo">Nike</button></a></li>
                        <li><a href="buzos.php" target="_parent"><button class="parrafo">Buzos</button></a></li>
                        <li><a href="mayora500.php" target="parent"><button class="parrafo">Precio mayor a 500</button></a></li>
                     </ul>
                  </nav>
              </aside>
            <header>
                <h1> Bienvenidx al Campus de tareas de Backend</h1>
                
            </header>
 <main>
 <?php
       $tipodeprenda=$datos["tipodeprenda"];
        $marca=$datos["marca"];
        $talle=$datos["talle"];
        $precio=$datos["precio"];
        $imagen=$datos['imagen'];
     ?>
    <h3>Tienda de Ropa</h3>
    <p>Ingrese los nuevos datos de la prenda</p>
    <form action="" method="post" enctype="multipart/form-data">
    <label>Tipo de prenda</label>
    <input type="text" name="tipodeprenda" placeholder="Tipo de prenda" value="<?php echo "$tipodeprenda"; ?>">
    <label>Marca</label>
    <input type="text" name="marca" placeholder="Marca" required>
    <label>Talle</label>
    <input type="text" name="talle" placeholder="Talle" required>
    <label>Precio</label>
    <input type="text" name="precio" placeholder="Precio" required>
    <label>Imagen</label>
    <input type="file" name="imagen" placeholder="Imagen">
    <input type="submit" name="guardarcambios" value="Guardar Cambios">
    <button type="submit" name="cancelar" formaction="index.html">Cancelar</button>
   </form>
   <?php
      if(array_key_exists('guardarcambios',$_POST)){
      $tipodeprenda=$_POST['tipodeprenda'];
      $marca=$_POST['marca'];
      $talle=$_POST['talle'];
      $precio=$_POST['precio'];
      $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
      $consulta = "UPDATE ropa SET tipodeprenda='$tipodeprenda', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen' WHERE id =$id";
      mysqli_query($conexion,$consulta);
      header('location: index.html');
    }?>
 </main>
 

  <footer>
    <hr>
    <p>LUCIANA BELEN LOPEZ - All rights reserved</p>
    <hr>
 </footer> 
 </body>
   
</html>
 