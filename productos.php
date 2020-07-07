<?php
include ('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/styleHeader.css">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <meta charset="UTF-8">
  <title>Quienes somos</title>
</head>
<body>
<?php
include ('header.php');
?>
<div class="hoja">
  <div class="contenido">
    <div class="prod">
    <h3 class="tituloestilo">Producto</h3>
    <br>
    <div class="articulos">
      <?php
      $consulta= $mysql->query("select * from producto");
      while ($iw=$consulta->fetch_array( MYSQLI_ASSOC)){
        echo "<div class='articulo'>";
        echo"<p>". $iw['id_producto']."<br> ". $iw['nombre']." <br>". $iw['descripcion']."</p>";
        echo "<br>";
        $valorp= $iw['id_producto'];
      $cons_img= "select ruta from imagen, producto  where $valorp = imagen.producto LIMIT 1";
      $mira = $mysql->query($cons_img);
      while ($wr=$mira->fetch_array(MYSQLI_ASSOC)){
        echo "<img class='pimg' src=".$wr['ruta'].">";
        echo "\n";
        //echo"<p>". $wr['id_imagen']." ". $wr['nombre']." ". $wr['ruta']."</p>";
      }
      echo "<br>";
      echo "</div>";

      }

      ?>
      <div class="articulo">
        <p>esta es la pagina de Productos</p>
      </div>
      <div class="articulo">
        <p>esta es la pagina de Productos</p>
      </div>
    </div>
    </div>
  </div>
</div>
<footer>
  <?php
  include ('footer.php');
  ?>
</footer>
</body>
</html>

