<?php
  require('../config.inc.php');
  require('../../models/users.class.php');

  if( isset($_SESSION['userLogged'])){
    //utente già loggato problemini
    header('Location: ../../index.php');
    exit();
  }if(isset($_SESSION['userLogin'])){
    //faccio il login
    $localUser = $_SESSION['userLogin'];
    $sql = $localUser->loginDB();

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($resutl) == 1){
      if( !$localUser->isSospeso()){
        $row = $result->fetch_array();
        $codUser = $row['codUtente'];
        $_SESSION['userLogged'] = $codUser;
        header('Location: ../../index.php?login=success');
      }
      else
      {
        header('Location: ../../index.php?error=sospeso');
        exit();
      }
    }
  }
  else
  {
    header('Location: ../../index.php');
    exit();
  }