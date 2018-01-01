<?php
  define("U_HOST","mysql796.umbler.com");
  define("U_USER","");
  define("U_PASS","");
  define("U_DB_NAME","");

  //$user     = "luis_app";
  //$pass     = "";
  //$db_name  = "luis_page";

  $conn = mysqli_connect(U_HOST, U_USER, U_PASS, U_DB_NAME);
  $conn->set_charset("utf8");
  if ($conn === false) {
    echo"Erro de conexão".$conn->connect_error;
  }