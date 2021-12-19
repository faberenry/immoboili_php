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
                        <div class="filter-section">
                            <label for="distance"><h6>Distanza:</h6></label>
                            <input id="distance" name="distance" type="range" min="1" max="100" value="50">
                        </div>
                        <div class="filter-section">
                            <label for="price"><h6>Prezzo:</h6></label>
                            <input id="price" name="price" type="range" min="1" max="100" value="50">
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
                <div class="showcase-card">
                    <img src="./public/images/dio.jpg" alt="">
                    <div class="card-description">
                        <h5>Esempio 1</h5>
                        <h6>40mq</h6>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, nisi.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, ad?
                        </p>
                    </div>
                </div>
                <div class="showcase-card">
                    <img src="./public/images/dio.jpg" alt="">
                    <div class="card-description">
                        <h5>Esempio 1</h5>
                        <h6>40mq</h6>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, nisi.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, ad?
                        </p>
                    </div>
                </div>
                <div class="showcase-card">
                    <img src="./public/images/dio.jpg" alt="">
                    <div class="card-description">
                        <h5>Esempio 1</h5>
                        <h6>40mq</h6>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, nisi.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, ad?
                        </p>
                    </div>
                </div>
            </div>
            <div class="maps-ads">
                <div class="map">

                </div>
                <div class="ad">


                </div>
            </div>
        </div>
    </main>
