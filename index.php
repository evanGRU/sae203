<?php 
    require 'public/php/fonctions.lib.php';
    headVariable("Accueil", "public/css/styleMain.css", "public/css/styleIndex.css", "public/images/deco/logo_min.png", 'public/php/head.php', "index.php", "listing.php","views/champions.php", "views/fav.php", "views/panier.php", "views/login.php", "admin/admin.php", "form_recherche.php", "public/php/nav.php");
?>


<main>
    <section id="hero">
        <span><div></div></span> 
        <div id=bg-hero>
            <div>
                <h1><img src="public/images/deco/logo.png" alt=""></h1>
            </div>
        </div>
    </section>
    
    <section id="card-box">
        <div></div>
        <a href="views/champions.php">
            <img src="https://www.leagueoflegends.com/static/support-d63ae08baf517425864ddc020a5871d5.png" alt="">
            <h1>CHAMPIONS</h1>
        </a>
        <a href="listing.php">
            <img src="https://www.leagueoflegends.com/static/assassin-two-3a0fb5383eca19a4bc9b3c53310380bf.png" alt="">
            <h1>SKINS</h1>
        </a>
    </section>
</main>


<?php require 'public/php/foot.php'; ?>


