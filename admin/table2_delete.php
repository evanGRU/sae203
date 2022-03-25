<?php 
    require '../public/php/fonctions.lib.php';
    headVariable("Gestion CHAMPIONS", "../public/css/styleMain.css", "../public/css/styleAdmin.css", "../public/images/deco/logo_min.png", '../public/php/head.php', "../index.php", "../listing.php", "../views/champions.php", "../views/fav.php", "../views/panier.php", "../views/login.php","admin.php", "../form_recherche.php", "../public/php/nav.php");
?>

<main>
    <section id="hero-admin">
        <span></span>
        <div id="hero-title">
            <?php
                require '../public/php/lib_crud.inc.php';
                
                $id=$_GET['num'];
	
	            $co=connexionBD();
	            effacerChampion($co, $id);
	            deconnexionBD($co);
            ?>
        </div>
        <a href="gestion_table2.php" id="gestion-btn">GESTION CHAMPIONS</a>
    </section>

</main>
    
<?php require '../public/php/foot.php'; ?>