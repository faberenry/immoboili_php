<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon"  href="../images/icon.ico">

    <title> IMMOBOILI </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/style.css" rel="stylesheet" type="text/css">

    <meta name="description" content="Un sito di immobili">
    <meta name="keywords" content="immobili">

    <style type="text/css">
        .stileOrange { color: #FFA500 }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </head>
  <header id="header">
            <div class="flex-center">
                
            </div>

            <div style="float:right;">

                <nav class="navbar navbar-light bg-light fixed-top">
                    <div class="container-fluid">
                      
                      <a class="navbar-brand">
                        <img src="../images/logo.png" alt="Errore di caricamento!" ALIGN="left" width="40" height="40"> 
                        <span class="stileOrange" size="7" style="float: right; margin-top: 5px"> &#8287; &#8287; IMMOBOILI </span>   
                      </a>

                        <button type="button" class="btn btn-primary" style="background-color: transparent; border-color: transparent;">
                          <a href="./includes/router.inc.php?url=main" id="butTypeA1" >Home</a></button>
                        <button type="button" class="btn btn-primary" style="background-color: transparent; border-color: transparent;">
                          <a class="btn btn-light" href="./includes/router.inc.php?url=chiSiamo" id="butTypeB1" >Chi siamo</a></button>
                        <button type="button" class="btn btn-primary" style="background-color: transparent; border-color: transparent;">
                          <a class="btn btn-light" href="./includes/router.inc.php?url=contatti" id="butTypeB2" >Contattaci</a></button>
                        <button type="button" class="btn btn-primary" style="background-color: transparent; border-color: transparent;">
                          <a class="btn btn-light" href="./includes/router.inc.php?url=offerte" id="butTypeB3" >Offerte</a></button>

                      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        
                        <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Profilo</h5>
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        
                        <div class="offcanvas-body">
                          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                              <a class="nav-link" href="./includes/router.inc.php?url=login">Login/Logout</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="./includes/router.inc.php?url=chat">Chat</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="./includes/router.inc.php?url=sponsorizzaAnnucio">Sponsorizzare Annuncio</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Calendario</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Gestione Annunci
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="#">Aggiungere/Modificare Annuncio</a></li>
                                <li><a class="dropdown-item" href="#">Certificazione di affidabilita'</a></li>
                                
                                <!--
                                <li>
                                  <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Certificazione di affidabilita'</a></li>
                                -->

                              </ul>
                            </li>

                            <li class="nav-item">
                              <a class="nav-link" href="./pages/includes/router.inc.php?url=sponsorizzaAnnucio">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                </svg>
                                &#8287; Impostazioni
                              </a>
                            </li>

                       </ul>
                      </div>
                     </div>
                    </div>
                   </nav>
                  </div>

        </header>

<?php
  require('./includes/config.inc.php');
  if(isset($_GET['codAnnuncio'])){
    $codAnnuncio = $_GET['codAnnuncio'];
    $sql = "SELECT locazione.nomeVia, locazione.numeroCivico, locazione.citofono, annuncio.costoMensile, 
                    annuncio.serviziVicini, annuncio.codAnnuncio, immagini.imagePath, annuncio.costoUtenze,
                    annuncio.numeroInquilini, annuncio.tipologiaAppartamento, annuncio.tipologiaContratto,
                    durataPerMinima, tipoPerMinima, metratura, classeEnergetica, speseCondominiali,
                    garage, animali, mezziDiTrasporto, serviziVicini, noteAggiuntive, caparra
            FROM annuncio 
            JOIN locazione ON annuncio.codLuogo = locazione.codLuogo
            LEFT JOIN immagini ON annuncio.codAnnuncio = immagini.codAnnuncio
            WHERE annuncio.codAnnuncio = $codAnnuncio";
    $result = mysqli_query($conn, $sql);
    if($result){
      if(mysqli_num_rows($result) == 1){
        $row = $result->fetch_array();
        if($row['imagePath'] == ""){
          $path = "../images/missing.jpg";
        }else{
          $path = $row['imagePath'];
        }
        if($row['animali'] == 0){
          $animali = "<p>Non sono ammessi animali</p>";
        }else{
          $animali = "<p>Sono ammessi animali</p>";
        }
        if($row['garage'] == 0){
          $auto = "<p>Non ha posto auto</p>";
        }else{
          $auto = "<p>Ha posto auto</p>";
        }
        echo "<div style='width:60%; margin-left:20%; margin-right:20%; margin-bottom:100px;'>
                <h1 style='margin-top:50px'>Annuncio</h1>
                <img src='$path' alt=''>
                <p>Descrizione</p>
                <ul>
                  <li>Indirizzo: ".$row['nomeVia']." ".$row['numeroCivico']."<br/>Citofono: ".$row['citofono']."</li>
                  <li>Inquilini: ".$row['numeroInquilini']."</li>
                  <li>Tipologia Appartamento: ".$row['tipologiaAppartamento']."</li>
                  <li>Tipologia Contratto: ".$row['tipologiaContratto']."</li>
                  <li>Contratto per: ".$row['durataPerMinima']." ".$row['tipoPerMinima']."</li>
                  <li>Metratura: ".$row['metratura']." mq</li>
                  <li>Classe Energetica: ".$row['classeEnergetica']."</li>
                </ul>
                <p>Costi: </p>
                <ul>
                  <li>Costo Mensile: ".$row['costoMensile']."</li>
                  <li>Caparra: ".$row['caparra']."</li>
                  <li>Costo Utenze: ".$row['costoUtenze']."</li>
                  <li>Spese Condominiali: ".$row['speseCondominiali']."</li>
                </ul>
                <p>Note: ".$row['noteAggiuntive']."</p>
                <p>Servizi: ".$row['serviziVicini']."</p>
                <p>Mezzi: ".$row['mezziDiTrasporto']."</p>
                $animali $auto
              </div>";
      }else{
        echo "<div style='width:60%; margin-left:20%; margin-right:20%; margin-top:50px'>
            <h4>Purtoppo non siamo riusciti a trovare l'annuncio che cercavi.</h4>
          </div>";
      }
    }else{
      echo "<div style='width:60%; margin-left:20%; margin-right:20%; margin-top:50px'>
            <h4>Purtoppo non siamo riusciti a trovare l'annuncio che cercavi.</h4>
          </div>";
    }
  }else{
    echo "<div style='width:60%; margin-left:20%; margin-right:20%; margin-top:50px'>
            <h4>Purtoppo non siamo riusciti a trovare l'annuncio che cercavi.</h4>
          </div>";
    //header('Location: ./pages/ricerca.php?error=dettaglioNotFound');
    //exit();
  }
  require('./footer.php');