<?php
use OpenApi\Annotations as OA;
/**
 * @OA\Info(title="Inserimento Messaggio",version="0.1")
 */
/**
 * @OA\Get(
 *     path="/",
 *     tags=["pages"],
 *     @OA\Response(response="200", description="Success"),
 *     @OA\Response(response="404", description="Not found")
 * )
 */
  require('../config.inc.php');
  $mittente = 2;
  $corpo = $_GET['message'];
  $destinatario = $_GET['destinatario'];
  $sql = "SELECT codUtente FROM utente WHERE username = '$destinatario'";
  $result = mysqli_query($conn, $sql);
  if( mysqli_num_rows($result) != 0){
    $row = $result->fetch_array();
    $idDestinatario = $row['codUtente'];
    //echo $idDestinatario;
    $sql = "INSERT INTO messaggio (corpo, destinatario, mittente)
            VALUES ('$corpo', $idDestinatario, $mittente);";
    $result = mysqli_query($conn, $sql);
    //printf($result);
    if($result){
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
    }else{
      echo "errore";
    }
  }
  else{
    echo "destinatario inesistente";
  }

  