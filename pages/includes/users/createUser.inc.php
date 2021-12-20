<?php
  require('../models/users.class.php');
  if( isset($_SESSION['userLogged'])) unset($_SESSION['userLogged']);
  $_SESSION['userLogin'] = new User("",$_POST['username'],$_POST['password'], "", "", "");
  //printf($_SESSION['userLogin']);
  print($_SESSION['userLogin']->getUsername());
  header('Location: ./login.inc.php');
  //exit();
