<?php
  unset($_SESSION['userLogged']);
  if( !isset($_SESSION['userLogged'])){
    /*echo "<div>
      <h4>Hai effettuato il logout correttamente</h4>
    </div>";*/
  }
  header('Location: ../index.php');
?>
  