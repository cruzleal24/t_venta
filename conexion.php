<?php
$mysql= new mysqli('T_venta.test','root','','tienda');
if ($mysql->connect_errno){
  echo "fallo la conexion a la mysql". $mysql->connect_errno.") ". $mysql->connect_error;
}


