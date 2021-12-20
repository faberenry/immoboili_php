<?php
  require('../config.inc.php');
  require('../models/users.class.php');

  if( isset($_SESSION['userLogged'])){
    //utente già loggato problemini
    header('Location: ../../index.php?login=logged');
    exit();
  }else if(isset($_SESSION['userLogin'])){
    //faccio il login
    $localUser = $_SESSION['userLogin'];
    $sql = $localUser->loginDB();
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($resutl) == 1){
      if( !$localUser->isSospeso()){
        $row = $result->fetch_array();
        $codUser = $row['codUtente'];
        $sql = "SELECT * FROM locatore WHERE codUtente = '$codUser';";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 1){
          $_SESSION['userLogged'] = $codUser;
          header('Location: ../../../index.php?login=locatore');
          exit();
        }
        else{
          $_SESSION['userLogged'] = $codUser;
          header('Location: ../../../index.php?login=studente');
          exit();
        }
      }
      else
      {
        header('Location: ../../../index.php?error=sospeso');
        exit();
      }
    }
  }
  else
  {
    header('Location: ../router.inc.php?url=main');
    exit();
  }