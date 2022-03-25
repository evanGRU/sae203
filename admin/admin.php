<?php 
    require '../public/php/fonctions.lib.php';
    headVariable("Admin", "../public/css/styleMain.css", "../public/css/styleAdmin.css", "../public/images/deco/logo_min.png", '../public/php/head.php', "../index.php", "../listing.php", "../views/champions.php", "../views/fav.php", "../views/panier.php", "../views/login.php", "admin.php", "../form_recherche.php", "../public/php/nav.php");
?>

<main>
    <section id="hero-admin">
        <span></span>
        <div id="hero-title">
            <h2>GESTION DES</h2>
            <h1>DONNÉES</h1>
            <div id="hero-buttons">
                <a href="champions">BDD CHAMPIONS</a>
                <a href="skins">BDD SKINS</a>
            </div>
        </div>
    </section>

</main>
    
<?php require '../public/php/foot.php'; ?>
