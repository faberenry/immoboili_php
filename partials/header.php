<header id="header">
            <div class="flex-center">
                
            </div>

            <div style="float:right;">

                <nav class="navbar navbar-light bg-light fixed-top">
                    <div class="container-fluid">
                      
                      <a class="navbar-brand">
                        <img src="./public/images/logo.png" alt="Errore di caricamento!" ALIGN="left" width="40" height="40"> 
                        <span class="stileOrange" size="7" style="float: right; margin-top: 5px"> &#8287; &#8287; IMMOBOILI </span>   
                      </a>

                        <button type="button" class="btn btn-primary" style="background-color: transparent; border-color: transparent;"><a href="./main.html" id="butTypeA1" >Home</a></button>
                        <button type="button" class="btn btn-primary" style="background-color: transparent; border-color: transparent;"><a class="btn btn-light" href="./chiSiamo.html" id="butTypeB1" >Chi siamo</a></button>
                        <button type="button" class="btn btn-primary" style="background-color: transparent; border-color: transparent;"><a class="btn btn-light" href="./contatti.html" id="butTypeB2" >Contattaci</a></button>
                        <button type="button" class="btn btn-primary" style="background-color: transparent; border-color: transparent;"><a class="btn btn-light" href="./offerte.html" id="butTypeB3" >Offerte</a></button>

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
                              <a class="nav-link" href="./chat.html">Chat</a>
                            </li>

                            <li class="nav-item">
                              <a class="nav-link" href="./sponsorAn.html">Sponsorizzare Annuncio</a>
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
                              <a class="nav-link" href="./impostazioni.html">
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
