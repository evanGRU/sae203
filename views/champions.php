<?php 
    require '../public/php/fonctions.lib.php';
    headVariable("Champions", "../public/css/styleMain.css", "../public/css/styleChampion.css", "../public/images/deco/logo_min.png", '../public/php/head.php', "../index.php", "../listing.php", "champions.php", "fav.php", "panier.php", "login.php", "../admin/admin.php", "../form_recherche.php", "../public/php/nav.php");
?>

<main>
    <section id="hero">
        <span></span>
        <div id="hero-title">
            <h2>DÉCOUVREZ</h2>
            <h1>NOS CHAMPIONS</h1>
        </div>
    </section>

    <section id="contentChamp">
        <div id="containerChamp">
            <?php
                require '../public/php/lib_crud.inc.php';
                $co=connexionBD();
                afficherChampions($co);
                deconnexionBD($co);
            ?>
        </div>
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
        <a href="../listing.php">
            <img src="../public/images/uploads/skin38.jpeg" alt="">
            <h1>SKINS</h1>
        </a>
        <a href="../form_recherche.php">
            <img src="../public/images/deco/search_sugg.jpeg" alt="">
            <h1>RECHERCHER</h1>
        </a>
    </section>
</main>
    
<?php require '../public/php/foot.php'; ?>
