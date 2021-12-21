    <main>
        <div class="container">
            <div class="search">
                <form action="">
                    <!--Seach Bar-->
                    <div class="search-bar">
                        <input type="text" id="search-field" name="search-term" placeholder="Inserisci la tua ricerca">
                        <button id="search-button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    
                    <!--Filters-->
                    <div class="filters">
                        <h2>Filtri</h2>
                        <!--<div class="filter-section">
                            <label for="distance"><h6>Distanza:</h6></label>
                            <input id="distance" name="distance" type="range" min="1" max="100" value="50">
                        </div>-->
                        <div class="filter-section">
                            <label for="price"><h6>Prezzo:</h6></label>
                            <input id="price" name="price" type="range" min="1" max="500" value="250">
                        </div>
                        <div class="filter-section">
                            <h6>Tipologia:</h6>
                            <div class="checkbox">
                                <input id="room-type-filter" name="type-filter" type="checkbox" value="Stanza">
                                <label for="room-type-filter">Stanza</label>
                            </div>
                            <div class="checkbox">
                                <input id="apartment-type-filter" name="type-filter" type="checkbox" value="Appartamento">
                                <label for="apartment-type-filter">Appartamento</label>
                            </div>
                        </div>
                        <div class="filter-section">
                            <label for="dimension"><h6>Dimensioni:</h6></label>
                            <input id="dimension" name="dimension" type="range" min="1" max="100" value="50">
                        </div>
                    </div>
                </form>
            </div>
            <div class="homeshowcase">
            <?php

                require('./pages/includes/config.inc.php');
                $sql = "SELECT locazione.nomeVia, locazione.numeroCivico, locazione.citofono, annuncio.costoMensile, 
                                annuncio.serviziVicini, annuncio.codAnnuncio, immagini.imagePath 
                        FROM annuncio 
                        JOIN locazione ON annuncio.codLuogo = locazione.codLuogo
                        LEFT JOIN immagini ON annuncio.codAnnuncio = immagini.codAnnuncio";
                if(isset($_GET['search-term']) && $_GET['search-term'] != ""){
                    $cerca = $_GET['search-term'];
                    $sql = $sql." WHERE (noteAggiuntive LIKE '%$cerca%' OR serviziVicini LIKE '%$cerca%' 
                                            OR mezziDiTrasporto LIKE '%$cerca%' OR tipologiaAppartamento LIKE '%$cerca%')";
                }
                if(isset($_GET['price']) && $_GET['price'] != "250"){
                    $prezzo = $_GET['price'];
                    if(strpos($sql, "WHERE") !== false){
                        $sql = $sql." AND (costoMensile > $prezzo)";
                        //echo $sql;
                    }else{
                        $sql = $sql." WHERE (costoMensile > $prezzo)";
                    }
                }
                if(isset($_GET['type-filter'])){
                    $tipologia = $_GET['type-filter'];
                    if(strpos($sql, "WHERE") !== false){
                        $sql = $sql." AND (tipologiaAppartamento LIKE '%$tipologia%')";
                        //echo $sql;
                    }else{
                        $sql = $sql." WHERE (tipologiaAppartamento LIKE '%$tipologia%')";
                    }
                }
                if(isset($_GET['dimension']) && $_GET['dimension'] != "50"){
                    $dim = $_GET['dimension'];
                    if(strpos($sql, "WHERE") !== false){
                        $sql = $sql." AND (metratura >= $dim)";
                        //echo $sql;
                    }else{
                        $sql = $sql." WHERE (metratura >= $dim)";
                    }
                }
                //echo $sql;
                $result = mysqli_query($conn, $sql);
                if($result){
                    if(mysqli_num_rows($result) > 0){
                        while($row = $result->fetch_array()){
                            //stampo gli annunci
                            ?> 
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
                                    $locazione = $row['nomeVia']." ".$row['numeroCivico'].",".$row['citofono'];
                                    $codAnnuncio = $row['codAnnuncio'];
                                    $servizi = $row['serviziVicini'];
                                    $costo = $row['costoMensile'];
                                    echo "<h5>Luogo: $locazione</h5>";
                                    echo "<p>Costo Mensile: $costo</p>";
                                    echo "<p>Servizi:$servizi</p>";
                                    echo "<p><a href='./pages/dettaglio.php?codAnnuncio=$codAnnuncio'>
                                            Dettaglio</a></p>";
                                ?>
                                </div>
                            </div>
                            <?php
                        }
                    }else{
                    ?>
                    <h4 class='nonTrovato'>Nessun annuncio presente</h4>
                    <?php
                    }                    
                }else{
                    echo "<h4 class='nonTrovato'>Nessun annuncio presente</h4>";
                }
                ?>
            </div>
            <div class="maps-ads">
                <div class="map">

                </div>
                <div class="ad">


                </div>
            </div>
        </div>
    </main>
