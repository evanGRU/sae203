<?php 
    require 'public/php/fonctions.lib.php';
    headVariable("Recherche : ".$_POST['search'], "public/css/styleMain.css", "public/css/styleSearch.css", "public/images/deco/logo_min.png", 'public/php/head.php', "index.php", "listing.php", "views/champions.php", "views/fav.php", "views/panier.php", "views/login.php","admin/admin.php", "form_recherche.php", "public/php/nav.php");
    require 'public/php/lib_crud.inc.php';
?>




<main>
    <section id="hero">
        <span><div></div></span>
        <div id="bg-hero" class="form-result">
            
            <?php   if(!empty($_POST['search']) OR !empty($_POST['searchPoste']) OR !empty($_POST['searchPrix']) OR !empty($_POST['searchRarete'])){
                        $co=connexionBD();
                        $req ="SELECT * FROM skins INNER JOIN personnages ON skins._personnage_id=personnages.personnage_id WHERE personnage_nom LIKE '%".$_POST['search']."%' AND personnage_poste LIKE '%".$_POST['searchPoste']."%' AND skin_prix_rp LIKE '%".$_POST['searchPrix']."%' AND skin_rarete LIKE '%".$_POST['searchRarete']."%'  ORDER BY _personnage_id ASC, skin_date_sortie ASC"; 
                        $resultat = $co->query($req);
                        $lignes_resultat = $resultat->rowCount();
                        
                        if ($lignes_resultat<=1){
                            echo '<h1>'.$lignes_resultat.' RÉSULTAT POUR "'.$_POST['search'].' '.$_POST['searchPoste'].' '.$_POST['searchPrix'].' '.$_POST['searchRarete'].'"</h1>';
                        } else {
                            echo '<h1>'.$lignes_resultat.' RÉSULTATS POUR "'.$_POST['search'].' '.$_POST['searchPoste'].' '.$_POST['searchPrix'].' '.$_POST['searchRarete'].'"</h1>';
                        }
                    } else {
                        header('Location: form_recherche.php');
                    }
            ?>
            <div id="search-box">
                <div id="search-box-bg">

                    <form id="form" method="post" action="reponse_recherche.php">
                        <div id="form-search">
                            <input type="text" name="search" id="searchTerm" autocomplete="off" placeholder="Qui cherchez-vous ?">
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
                                    <option value="390">
                                    <option value="520">
                                    <option value="750">
                                    <option value="975">
                                    <option value="1350">
                                    <option value="1820">
                                    <option value="3250">
                                </datalist>
                                <input type="search" list="rarete" autocomplete="off" class="search-elm" name="searchRarete" placeholder="--rarete"/>
                                <datalist id="rarete">
                                    <option value="peu commun">
                                    <option value="commun">
                                    <option value="rare">
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


    <section id="content">
            <?php   if(!empty($_POST['search']) OR !empty($_POST['searchPoste']) OR !empty($_POST['searchPrix']) OR !empty($_POST['searchRarete'])){
                        afficherCatalogue($co, $req);
                        deconnexionBD($co);
                    } else {
                        header('Location: form_recherche.php');
                    }
            ?>
    </section>


</main>



<?php require 'public/php/foot.php'; ?>