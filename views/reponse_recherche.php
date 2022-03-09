<?php 
$titre = "Recherche : ".$_POST['search'];
$styleMain = "../css/styleMain.css";
$style = "../css/styleSearch.css";
$menuNav = "../images/deco/menu.png";
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
            <?php if(!empty($_POST['search'])){
                $search ="SELECT * FROM skins INNER JOIN personnages ON skins._personnage_id=personnages.personnage_id WHERE personnage_nom = '".$_POST['search']."'"; 
                $resultat_search = $mabd->query($search); 
                
                $lignes_resultat_search = $resultat_search->rowCount();
                if ($lignes_resultat_search<=1){
                    echo '<h2>'.$lignes_resultat_search.' résultat pour "'.$_POST['search'].'"</h2>';
                } else {
                    echo '<h2>'.$lignes_resultat_search.' résultats pour "'.$_POST['search'].'"</h2>';
                }
            }   else {
                header('Location: form_recherche.php');
            }?>
            <img src="../images/deco/bg_deco.png" alt="">
        </div>
    </section>

    <section id="content">
        
            <?php if (!empty($_POST['search'])){
                if ($lignes_resultat_search>0) { 

                    $i=0;
                    while ($ligne = $resultat_search->fetch(PDO::FETCH_ASSOC)){
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
                    }

                } 
                $mabd = null;
            } else {
                header('Location: form_recherche.php');
            }?>
            </section>

    <section id="footer">
            <img src="../images/deco/bg_deco.png" alt="">
    </section>

</main>
    
<?php require('../php/footer.php'); ?>
