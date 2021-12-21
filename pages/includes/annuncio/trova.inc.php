<?php
  //funzionamento ricerca.php (copiato e incollato lì il codice), pagina non funzionante
  require('./pages/includes/config.inc.php');
  //$codAnnnuncio = $_GET['codAnnuncio'];

  $sql = "SELECT * 
          FROM annuncio 
            JOIN locazione ON annuncio.codLuogo = locazione.codLuogo
            JOIN immagini ON annuncio.codAnnuncio = immagini.codAnnuncio";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0){
    while($row = $result->fetch_array()){
      //stampo gli annunci
      ?> 
      <div class='homeshowcase'>
        <div class='showcase-card'>
          <?php 
            if($row['imagePath'] == ""){?>
              <img src="./images/missing.jpg" alt="">
            <?php
            }else{
              $path = $row['imagePath'];
              echo "<img src='$path' alt=''>";
            }
          ?>
          <div class="card-description">
            <?php
              $locazione = $row['nomeVia']." ".$row['numeroCivico']."<br/>".$row['citofono'];
              echo "<h5>$locazione</h5>";
              echo "<h6>Costo Mensile: ".$row['costoMensile']."</h6>";
              echo "<p><a href='./pages/includes/annuncio/dettaglio.inc.php?codAnnuncio=".$row['codAnnuncio']."'>
                      Dettaglio</a></p>";
            ?>
          </div>
        </div>
      </div>
      <?php
    }
  }else{
  ?>
    <h4 class='nonTrovato'>Nessun annuncio presente</h4>
  <?php
  }
  ?>