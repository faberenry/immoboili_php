<?php
session_start();
$nome = htmlspecialchars($_GET['nome']);
if ($nome != "") {
  $_SESSION['nome'] = $nome;
}
?>
<script type="text/javascript">
  function invia_mess(mex){
    var destinatario = document.getElementById("handle").value;
    var http = new XMLHttpRequest(message);
    var url = "../includes/chat/inserisciMessaggio.inc.php";
    http.open("GET", url+"?message="+mex+"&destinatario="+destinatario, true);
    http.onreadystatechange = function() {
      if(http.readyState == 4 && http.status == 200) {
        var response = http.responseText;  
        document.getElementById("output").innerHTML = response;
      }
    };
    http.send(null);    
  }

  function visualizzaconv(){
    var http = new XMLHttpRequest(message);
    var url = "../includes/chat/visualizzaChat.inc.php";
    http.open("GET", url, true);
    http.onreadystatechange = function() {
      if(http.readyState == 4 && http.status == 200) {
        var response = http.responseText;  
        document.getElementById("output").innerHTML = response;
        //setTimeout("visualizzaconv()",2000);
      }
    };
    http.send(null);    
  }
</script>
 
<!-- MAIN -->
        <main id="main" class="center-text">
            
          <div id="chat" style="width: 602px; height: 670px; background-color: orange; border-color: black; border: solid 1px">
            <input type="text" id="handle" placeholder="Nome Utente" style="height: 30px; border: none; width: 596px; text-align: center; background-color: orange; border-radius: 30px">
            
            <div id="chat-window">
                <div id="output"></div>
            </div>

            <input type="text" id="message" placeholder="  Scrivi qui" style="width: 555px; height: 30px; background-color: orange; border: none; border-radius: 5px;">

            <button id="send" style="border: none; background-color: orange;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                  <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                </svg>
            </button>
            
          </div>

        </main>
