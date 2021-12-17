<?php
  require('../config.inc.php');
  require('../../models/users.class.php');

  if( isset($_SESSION['userLogged'])){
    //utente già loggato problemini
    header('../../index.php');
    exit();
  }if(isset($_SESSION['userLogin'])){
    //faccio il login
    $localUser = $_SESSION['userLogin'];
    $sql = $localUser->loginDB();

    $result = mysqli_query($conn, $sql);
    if(true){

    }
  }