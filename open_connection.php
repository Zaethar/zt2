<?php
  $host = "localhost";
  $db = "areazt";
  $user = "root";
  $password = "";

  $usuarios = "usuarios";

  $connection = new mysqli($host, $user, $password, $db);

  if (!$connection) {
    echo " Error en la conexión mysql";
  }
?>
