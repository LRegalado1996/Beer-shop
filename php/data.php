<?php

  // connection to the database
  $host = "localhost";
  $user = "root";
  $pw = "root";
  $db = "planilla";
  $conexion = mysql_connect($host, $user, $pw) or die ("Problems, connecting database");
  mysql_select_db($db, $conexion) or die ("Problems, select database");
  // End of connection to the database


 ?>
