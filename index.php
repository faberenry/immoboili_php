<?php
  session_start();
  use OpenApi\Annotations as OA;
  /** 
   * @OA\Info(title="Progetto Immoboili") 
  */
  
  //require('./includes/config.inc.php');
  //$_SESSION['userLogged'] = 2; //per scopo di prova l'utente loggato sarà l'utente prova 2
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon"  href="./images/icon.ico">

    <title> IMMOBOILI </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./css/style.css" rel="stylesheet" type="text/css">

    <meta name="description" content="Un sito di immobili">
    <meta name="keywords" content="immobili">

    <style type="text/css">
        .stileOrange { color: #FFA500 }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </head>
  <body>
    <?php 
      require('./pages/header.php');
      if(isset($_SESSION['currentPage']) && $_SESSION['currentPage'] != ""){
        $current = $_SESSION['currentPage'];
        require('./pages/'.$current);
      }else{
        require('./pages/main.php');
      }
      echo "";
      require("./pages/footer.php");
    ?>
    
  </body>
</html>
