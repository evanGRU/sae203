<?php 
    require '../public/php/fonctions.lib.php';
    headVariable("Se Connecter", "../public/css/styleMain.css", "../public/css/styleLogin.css", "../public/images/deco/logo_min.png", '../public/php/head.php', "../index.php", "../listing.php", "champions.php", "fav.php", "panier.php", "login.php", "../admin/admin.php", "../form_recherche.php", "../public/php/nav.php");
?>


<main>
    <section id="hero">
        <div id="hero-title">
            <form action="verif.php" method="get">
                <h1>CONNEXION</h1>
                <div id="inputs">
                    <div>
                        <label for="nom">nom d'utilisateur</label>
                        <input type="text" name="nom" autocomplete="off" required>
                    </div>
                    <div>
                        <label for="mdp">mot de passe</label>
                        <input type="password" name="mdp" required>
                    </div>
                </div>
                <input type="submit" name="send" id="gestion-btn" value="SE CONNECTER">
                <div id="regLink">
                    <p>Pas encore inscrit?</p>
                    <a href="register.php">s'inscrire</a>
                </div>
            </form>
        </div>
    </section>
</main>


<?php require '../public/php/foot.php'; ?>


