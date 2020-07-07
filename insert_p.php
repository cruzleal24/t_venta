
<?php
include ('conexion.php');
if(isset($_POST['insertar'])){
  //$id=$_POST['sku'];
  $producto=$_REQUEST['nombre']; //nombre del arhivo
   $nombre =$_FILES['imagen']['name'];//nombre del archivo con extension
  $archivo=$_FILES['imagen']['tmp_name'];//ruta del archivo
  $direc= "img";
  $direc=$direc."/".$nombre;//ruta donde se va a almacenar
  move_uploaded_file($archivo,$direc);
  $producto=$_REQUEST['producto'];
  $inserta= $mysql->query("insert into imagen(nombre, ruta,producto) values ('$producto','$direc','$producto')");

  if ($inserta){
    echo "si entro sin problema";
  }
}

?>

<!doctype html>
<html>
<head><link rel="stylesheet" href="css/styleHeader.css">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <meta charset="UTF-8">
  <title>Contactanos</title>
</head>
<body>
<?php
include ('header.php');
?>
<div class="hoja">
  <div class="contenido">
        <div class="bloc">
      <form class="formulario" method="POST" enctype="multipart/form-data">
        <!--label for="sku">Sku:</label>
        <input type="number" name="sku" placeholder="Numero del archivo"-->
          <br>
          <label for="imagen">Archivo:</label>
          <input type="file" name="imagen" ></p>
          <br>
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" placeholder="nombre">
          <br>
          <label for="product">numero del producto</label>
          <input type="number" name="producto" placeholder="producto">
          <br>
          <input type="submit" name="insertar" value="enviar">


      </form>
    </div>
    <hr>
    <div class="bloc">
      <?php
      $consulta= "select * from imagen";

      $mira = $mysql->query($consulta);

      while ($wr=$mira->fetch_array(MYSQLI_ASSOC)){
        echo "\n";
        echo"<p>". $wr['id_imagen']." ". $wr['nombre']." ". $wr['ruta']."</p>";
      }
      echo "<br>";
      $cons_img= $mysql->query("select ruta from imagen");
      while ($iw=$cons_img->fetch_array( MYSQLI_ASSOC)){

        echo "<img src=".$iw['ruta'].">";
        echo  $iw['ruta'];
      }

      ?>
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



