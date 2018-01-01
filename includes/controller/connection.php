<?php
  $host = "mysql796.umbler.com";
  //$host = "mysql796.umbler.com:41890";
  $user = "luis_app";
  $pass = "LuismyDB42";
  $db_name = "luis_page";

  $conn = mysqli_connect($host, $user, $pass, $db_name);
  $conn->set_charset("utf8");
  if ($conn === false) {
    echo"Erro de conexão".$conn->connect_error;
  }
?>
