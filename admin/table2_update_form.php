<?php 
    require '../public/php/fonctions.lib.php';
    headVariable("Gestion SKINS", "../public/css/styleMain.css", "../public/css/styleAdmin.css", "../public/images/deco/logo_min.png", '../public/php/head.php', "../index.php", "../listing.php", "../views/champions.php", "../views/fav.php", "../views/panier.php", "../views/login.php","admin.php", "../form_recherche.php", "../public/php/nav.php");
?>

<main>
    <section id="hero-admin">
        <span></span>
        <div id="hero-form">
            <div id="form-title">
                <h1>MODIFIER UN CHAMPION</h1>
                <a href="gestion_table2.php">>> retour</a>
            </div>
            <?php
                require '../public/php/lib_crud.inc.php';

                $id=$_GET['num'];
                $co=connexionBD();
                $champion=getChampion($co, $id);
                deconnexionBD($co);
            ?>
            <form action="table2_update_valide.php" method="POST" enctype="multipart/form-data" id="form-gestion">
                <div id="inputs">
                    <input type="hidden" name="num" value="<?= $id; ?>" />
                    <div>
                        <p>champion</p> 
                        <input type="text" name="nom" value="<?php echo $champion['personnage_nom']; ?>" required>
                        
                    </div>
                    <div>
                        <p>poste</p> 
                        <input type="text" name="poste" list="poste" autocomplete="off" value="<?php echo $champion['personnage_poste']; ?>" required/>
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
                        <input type="file" name="photo" id="invisible">
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
