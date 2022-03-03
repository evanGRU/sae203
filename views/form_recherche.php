<?php 
$titre = "Catalogue";
$styleMain = "../css/styleMain.css";
$style = "../css/styleSearch.css";
require('../php/head.php'); 

$index = "../index.php";
$listing = "listing.php";
$admin = "admin.php";
$search = "form_recherche.php";
require('../php/nav.php'); 
?>

<main>
<!-- <form action="form_recherche.php">
    <input type="search" list="realisateurs" id="real" name="real" />
    <datalist id="realisateurs">
        <option value="Allen">
        <option value="Donner">
        <option value="Kubrick">
        <option value="Nolan">
        <option value="Tarantino">
        <option value="Tessari">
    </datalist>
    <input class="btn btn-primary" type="submit" value="Rechercher" id="submit">
  </form> -->
  
    <section id="hero">
        <div id="bg-hero">
            <span></span>
            <h2>RECHERCHER</h1>
            <h1>UN SKIN</h1>
            
            <div id="search-box">
                <div id="search-box-bg">
                    <form id="form" method="post" action="form_recherche.php">
                        <form id="form-search" method="post" action="form_recherche.php">   
                            <input type="text" name="search" id="searchTerm" placeholder="Qui cherchez-vous ?">
                            <button type="submit" name="send" value="OK" class="search-button" aria-hidden="true">
                            </button>
                        </form>
                        <div id="filter">
                            <input type="search" list="poste" id="real" name="real" autocompletion="off" />
                            <datalist id="poste">
                                <option value="top">
                                <option value="jungle">
                                <option value="mid">
                                <option value="adc">
                                <option value="support">
                            </datalist>
                            <input class="btn btn-primary" type="submit" value="Rechercher" id="submit">
                        </div>
                    </form>
                    <p id="filter-btn" >+ plus de filtres +</p>
                </div>
                <img src="../images/deco/bg_deco.png" alt="">

            </div>

        </div>
    </section>

    <section id="footer">
            <img src="../images/deco/bg_deco.png" alt="">
    </section>

</main>
    
<?php require('../php/footer.php'); ?>
