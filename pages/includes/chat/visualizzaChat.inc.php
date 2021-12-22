<?php
use OpenApi\Annotations as OA;
  require('../config.inc.php');
  require("/vendor/autoload.php");
  $mittente = $_SESSION['userLogged'];
  $destinatario = $_GET['destinatario'];
  $sql = "SELECT codUtente FROM utente WHERE username = '$destinatario'";
  $result = mysqli_query($conn, $sql);
  if( mysqli_num_rows($result) != 0){
    $row = $result->fetch_array();
    $idDestinatario = $row['codUtente'];
    $sql = "SELECT corpo
            FROM messaggio 
            WHERE destinatario = $idDestinatario 
                  AND mittente = $mittente
            ORDER BY codMessaggio ASC;";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_array($result)){
        $corpo = $row['corpo'];
        echo "<p>$corpo</p>";
      }
    }
    else{
      echo "";
    }
  }
  else{
    echo "destinatario inesistente";
  }