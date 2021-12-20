<main id="main" class="center-text">
<?php
  if(isset($_SESSION['userLogged'])){
    echo "logout";
    unset($_SESSION['userLogged']);
  }else{
    echo '<form name="datilogin" method="POST" action="./pages/includes/users/createUser.inc.php" class="login">
            <h4>Login</h4>
            <input type="text" placeholder="Username" name="username" onclick="avvisa();"/>
            <input type="password" placeholder="Password" name="password"/>
            <input type="submit" value="Login" />
          </form>
          <script>
            function avvisa(){
              alert("per testing usare username= username2, password = ciao2");
            }
          </script>';
  }
?>
</main>

