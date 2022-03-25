<?php 
    require '../public/php/fonctions.lib.php';
    headVariable("Gestion SKINS", "../public/css/styleMain.css", "../public/css/styleAdmin.css", "../public/images/deco/logo_min.png", '../public/php/head.php', "../index.php", "../listing.php", "../views/champions.php", "../views/fav.php", "../views/panier.php", "../views/login.php","admin.php", "../form_recherche.php", "../public/php/nav.php");
?>

<main>
    <section id="hero-admin">
        <span></span>
        <div id="hero-form">
            <div id="form-title">
                <h1>AJOUTER UN CHAMPION</h1>
                <a href="gestion_table2.php">>> retour</a>
            </div>
            <form action="table2_new_valide.php" method="POST" enctype="multipart/form-data" id="form-gestion">
                <div id="inputs">
                    <div>
                        <p>nom</p>
                        <input name="nom" required>
                    </div>
                    <div>
                       <p>poste</p> 
                        <input type="text" name="poste" list="poste" autocomplete="off"/>
                        <datalist id="poste">
                            <option value="top">
                            <option value="jungle">
                            <option value="mid">
                            <option value="adc">
                            <option value="support">
                        </datalist>
                    </div>
                    <div id="upload">
                        <p>photo</p>
                        <input type="file" name="photo" id="invisible" required>
                        <label for="invisible" class="custom">cliquer pour choisir</label>                 
                        <div id="preview">
                            <p>photo</p>
                            <label for="invisible" class="custom">test</label>
                        </div>
                    </div>  
                </div>
                <input type="submit" value="AJOUTER" id="gestion-btn" />

            </form>
        </div>
    </section>

</main>


<?php require '../public/php/foot.php'; ?>
