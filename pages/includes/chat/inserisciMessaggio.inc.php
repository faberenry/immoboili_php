<?php 
  require('../config.inc.php');
  //$mittente = $_SESSION['userLogged'];
  $corpo = $_GET['message'];
  $orario = date("Y-m-d:H-i-s");
  $destinatario = $_GET['destinatario'];
  $sql = "SELECT codUtente FROM utente WHERE username = '$destinatario'";
  $result = mysqli_query($conn, $sql);
  if( mysqli_num_rows($result) != 0){
    $row = $result->fetch_array();
    $idDestinatario = $row['codUtente'];
    //echo $idDestinatario;
    $sql = "INSERT INTO messaggio (corpo, orario, destinatario, mittente)
            VALUES ('$corpo', $orario, $destinatario, $mittente);";
    $result = mysqli_query($conn, $sql);
    if($result){
      $sql = "SELECT corpo
              FROM messaggio 
              WHERE destinatario = '$destinatario' 
                    AND mittente = '$mittente';
              ORDER BY oraio ASC";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
          $corpo = $row['corpo'];
          echo $corpo;
        }
      }
      else{
        echo "";
      }
    }
  }
  else{
    echo "destinatario inesistente";
  }

  