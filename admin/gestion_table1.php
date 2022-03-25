<?php 
    require '../public/php/fonctions.lib.php';
    headVariable("Gestion SKINS", "../public/css/styleMain.css", "../public/css/styleAdmin.css", "../public/images/deco/logo_min.png", '../public/php/head.php', "../index.php", "../listing.php", "../views/champions.php", "../views/fav.php", "../views/panier.php", "../views/login.php", "admin.php", "../form_recherche.php", "../public/php/nav.php");
?>

<main>
    <section id="hero-admin">
        <span></span>
        <div id="hero-gestion">
            <h1>TABLE SKINS</h1>
            <div>
                <a href="admin.php">>> retour</a>
                <a href="table1_new_form.php">>> ajouter un skin</a>
            </div>
            <?php
                require '../public/php/lib_crud.inc.php';
                $co=connexionBD();
                afficherListe($co);
                deconnexionBD($co);
            ?>
        </div>
    </section>

</main>
    
<?php require '../public/php/foot.php'; ?>
