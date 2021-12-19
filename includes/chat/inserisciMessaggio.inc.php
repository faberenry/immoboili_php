<?php 
 /* if(!isset($_SESSION['userLogged'])){
    header('Location: ../../index.php?error=11');
    exit();
  }else{
    $mittente = $_SESSION['userLogged'];
    $corpo = $_GET['message'];
    $orario = date("Y-m-d:H-i-s");
  }*/
  echo $_GET['message'];

  