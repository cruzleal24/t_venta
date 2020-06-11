<?php
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
<div class="contenido">
<p>esta es la pagina de contactos</p>
<ul>
  <li><ul>
    <li>Josue Cruz</li>
    <li>Ventas</li>
    <li>ventas.torfii@gmail.com</li>
    <li>Cel: (33) 28406449</li>
            <li>TORFII</li>
    <li> Tornillos Especiales & Fijaciones Industriales </li>
    </ul></li>
       <li><ul>
    <li>Edgar Romero</li>
    <li>Ventas</li>
    <li>ventas.torfii@gmail.com</li>
    <li>Cel: (33) 3959 3181</li>
              <li>TORFII</li>
    <li>Tornillos Especiales & Fijaciones Industriales</li>
  </ul></li>
</ul>

  <form class="formulario">
    <label  >Nombre:</label>
    <input type="text" name="nombre" placeholder="Nombre"></>
    <p>Telefono: <input type="tel" name="telefono" placeholder="Telefono"></p>
    <p> Correo: <input type="email" name="correo" placeholder="Correo"></p>
    <p> Comentarios: <textarea name="comentario" placeholder="Escribe tus comentarios..."></textarea> </p>

  </form>
</div>
<footer>
  <?php
  include ('footer.php');
  ?>
</footer>
</body>
</html>

