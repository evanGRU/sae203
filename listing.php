<?php 
    require 'public/php/fonctions.lib.php';
    headVariable("Skins", "public/css/styleMain.css", "public/css/styleListing.css", "public/images/deco/logo_min.png", 'public/php/head.php', "index.php", "listing.php", "views/champions.php", "views/fav.php", "views/panier.php", "views/login.php", "admin/admin.php", "form_recherche.php", "public/php/nav.php");
?>



    <main>
        <section id="hero">
            <span></span>
            <div>
                <h2>CHOISSISSEZ</h2>
                <h1>VOS SKINS</h1>
            </div>
        </section>

        
        <section id="content">
            <?php
                require 'public/php/lib_crud.inc.php';
                $co=connexionBD();
                $req="SELECT * FROM skins INNER JOIN personnages ON skins._personnage_id = personnages.personnage_id ORDER BY _personnage_id ASC, skin_date_sortie ASC";
                afficherCatalogue($co, $req);
                deconnexionBD($co);
            ?>
            <div id="scrollTop">
                <a href="#navbar" id="scroller"><i class="fa-solid fa-arrow-up"></i></a>
            </div>
        </section>

        <div id="suggTitle">
            <div></div>
            <span>VOIR AUSSI</span>
            <div></div>
        </div>

        <section id="suggestion">
            <a href="views/champions.php">
                <img src="public/images/deco/champ_sugg.png" alt="">
                <h1>CHAMPIONS</h1>
            </a>
            <a href="form_recherche.php">
                <img src="public/images/deco/search_sugg.jpeg" alt="">
                <h1>RECHERCHER</h1>
            </a>
        </section>
    </main>
    
<?php require 'public/php/foot.php'; ?>
