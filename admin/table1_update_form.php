<?php 
    require '../public/php/fonctions.lib.php';
    headVariable("Gestion SKINS", "../public/css/styleMain.css", "../public/css/styleAdmin.css", "../public/images/deco/logo_min.png", '../public/php/head.php', "../index.php", "../listing.php", "../views/champions.php", "../views/fav.php", "../views/panier.php", "../views/login.php","admin.php", "../form_recherche.php", "../public/php/nav.php");


?>



<main>
    <section id="hero-admin">
        <span></span>
        <div id="hero-form">
            <div id="form-title">
                <h1>MODIFIER UN SKIN</h1>
                <a href="gestion_table1.php">>> retour</a>
            </div>
            <?php
                require '../public/php/lib_crud.inc.php';

                $id=$_GET['num'];
                $co=connexionBD();
                $skin=getSkin($co, $id);
                deconnexionBD($co);
            ?>
            <form action="table1_update_valide.php" method="POST" enctype="multipart/form-data" id="form-gestion">
                <div id="inputs">
                    <input type="hidden" name="num" value="<?= $id; ?>" />
                    <div>
                        <p>nom</p>
                        <input type="text" name="nom" value="<?php echo $skin['skin_nom']; ?>" required />
                    </div>

                    <div>
                        <p>champion</p> 
                        <select name="perso" required>
                        <?php
                            $co=connexionBD();
                            afficherChampionsOptionsSelectionne($co, $skin['_personnage_id']);
                            deconnexionBD($co);
                        ?>
                        </select>
                        
                    </div>

                    <div>
                        <p>prix</p> 
                        <input type="text" name="prix" list="prix" autocomplete="off" value="<?php echo $skin['skin_prix_rp']; ?>" required />
                        <datalist id="prix">
                            <option value="390">
                            <option value="520">
                            <option value="750">
                            <option value="975">
                            <option value="1350">
                            <option value="1820">
                            <option value="3250">
                        </datalist>
                    </div>

                    <div>
                        <p>date sortie</p>
                        <input type="date" name="sortie" value="<?php echo $skin['skin_date_sortie']; ?>" required />
                    </div>

                    <div>
                        <p>rareté</p> 
                        <input type="text" name="rarete" list="rarete" autocomplete="off" value="<?php echo $skin['skin_rarete']; ?>" required />
                        <datalist id="rarete">
                                <option value="peu commun">
                                <option value="commun">
                                <option value="rare">
                                <option value="legendaire">
                                <option value="epique">
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
                <input type="submit" value="MODIFIER" id="gestion-btn" />
            </form>
        </div>
    </section>

</main>
    
<?php require '../public/php/foot.php'; ?>
