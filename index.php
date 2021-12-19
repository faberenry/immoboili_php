<?php
  session_start();
  require('./includes/config.inc.php');

<!--       MAIN       -->
        <main id="main" class="center-text">
            
            <form action="" class="search-bar">
            
                <input type="text" id="search-field" name="research" minlength="6" maxlength="35" placeholder="Ricerca appartamento">
                
                <button id="search-button">
                  <a class="nav-link active" aria-current="page" href="./ricerca.html"><i class="fas fa-search"></i></a>
                </button>
            
            </form>

        </main>
