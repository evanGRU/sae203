<?php 
$titre = "Recherche";
$styleMain = "../css/styleMain.css";
$style = "../css/styleSearch.css";
$menuNav = "../images/deco/menu.png";
require('../php/head.php'); 

$index = "../index.php";
$listing = "listing.php";
$admin = "admin.php";
$search = "form_recherche.php";
require('../php/nav.php'); 
require('../php/connexion_bdd.php')
?>

<main>
  
    <section id="hero">
        <div id="bg-hero">
            <span></span>
            <h2>RECHERCHEZ</h1>
            <h1>UN SKIN</h1>
            
            <div id="search-box">
                <div id="search-box-bg">


                    <form id="form" method="post" action="reponse_recherche.php">
                        <div id="form-search">
                            <input type="text" name="search" id="searchTerm" autocomplete="off" placeholder="Qui cherchez-vous ?">
                            <button type="submit" name="send" value="OK" class="search-button"></button>
                        </div>
                        <div id="filter">
                            <div id="form-filter">
                                <input type="search" list="poste" autocomplete="off" class="search-elm" name="searchPoste" placeholder="--poste"/>
                                <datalist id="poste">
                                    <option value="top">
                                    <option value="jungle">
                                    <option value="mid">
                                    <option value="adc">
                                    <option value="support">
                                </datalist>
                                <input type="search" list="prix" autocomplete="off" class="search-elm" name="searchPrix" placeholder="--prix"/>
                                <datalist id="prix">
                                    <option value="390 RP">
                                    <option value="520 RP">
                                    <option value="750 RP">
                                    <option value="975 RP">
                                    <option value="1350 RP">
                                    <option value="1820 RP">
                                    <option value="3250 RP">
                                </datalist>
                                <input type="search" list="rarete" autocomplete="off" class="search-elm" name="searchRarete" placeholder="--rarete"/>
                                <datalist id="rarete">
                                    <option value="peu commun">
                                    <option value="commun">
                                    <option value="rare">
                                    <option value="epique">
                                    <option value="legendaire">
                                    <option value="epique">
                                </datalist>
                            </div>
                            <input id="search-button2" type="submit" name="send" value="RECHERCHER"></input>
                        </div>
                    </form>

                    
                    <p id="filter-btn1" > -- ajouter des filtres --</p>
                    <p id="filter-btn2" > -- réduire les filtres --</p>
                </div>
            </div>

        </div>
    </section>

</main>
    
<?php require('../php/footer.php'); ?>

