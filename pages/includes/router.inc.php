<?php
  session_start();
  if(isset($_GET['url'])){
    $_SESSION['currentPage'] = $_GET['url'].".php";
    //echo $_SESSION['currentPage'];
    header('Location: ../../index.php');
    exit();
  }