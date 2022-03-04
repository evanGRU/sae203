<?php 
$titre = "Skins";
$styleMain = "../css/styleMain.css";
$style = "../css/styleListing.css";
require('../php/head.php'); 

$index = "../index.php";
$listing = "listing.php";
$admin = "admin.php";
$search = "form_recherche.php";
require('../php/nav.php'); 
require('../php/connexion_bdd.php')
?>

    <main>
        <section id="hero">
            <div id="bg-hero">
                <span></span>
                <h2>CHOISSISSEZ</h1>
                <h1>VOS SKINS</h1>
                <img src="../images/deco/bg_deco.png" alt="">
            </div>
        </section>
        
        <section id="content">
            
            
            

            <?php
            $lignes_resultat = $resultat->rowCount();
            if ($lignes_resultat>0) { 

                $i=0;
                while (($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) && ($i<50)) {
                    echo '<article>';
                    echo '  <div class="card-image">
                                <img src="../images/'.$ligne["skin_photo"].'.jpeg" alt="">
                            </div>
                            <div class="text-card-bottom">
                                <div class="text-card-title">
                                    <h3>'.ucwords($ligne["skin_nom"]).'</h3>
                                </div>
                                <div class="text-card">
                                    <div class="text-card-lane">
                                        <div class="ligne"></div>
                                        <p>'.$ligne["personnage_poste"].'</p>
                                        <div class="ligne"></div>
                                    </div>
                                    <div class="text-card-cara">
                                        <ul>
                                            <li><span>RARETÉ : </span>'.ucwords($ligne["skin_rarete"]).'</li>
                                            <li><span>SORTIE : </span>'.$ligne["skin_date_sortie"].'</li>
                                            <li><span>PRIX : </span>'.$ligne["skin_prix_rp"].' RP</li>
                                        </ul>
                                        <div>
                                            <a href="">acheter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    echo '</article>'; 
                    $i++;   
                }

            } else { echo '<p>Pas de résultat !</p>'; 
            }
            $mabd = null;
?>
            
            
        </section>
        
        <section id="footer">
            <img src="../images/deco/bg_deco.png" alt="">
        </section>
        
    </main>
    
<?php require('../php/footer.php'); ?>
