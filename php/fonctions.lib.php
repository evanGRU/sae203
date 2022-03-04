<?php

// function afficherFiltre($compteur) {
//     $poste = "$_POST['searchPoste']";
//     $prix = "$_POST['searchPrix']";
//     $rarete = "$_POST['searchRarete']";
//     $correspondance = [
//         '1' => 'SELECT * FROM skins INNER JOIN personnages ON skins._personnage_id=personnages.personnage_id WHERE personnage_poste ='.$poste.';',
//         '5' => 'SELECT * FROM skins INNER JOIN personnages ON skins._personnage_id=personnages.personnage_id WHERE champion_prix = '.$prix.';',
//         '10' => 'SELECT * FROM skins INNER JOIN personnages ON skins._personnage_id=personnages.personnage_id WHERE champion_rarete = '.$rarete.';',
//         '6' => 'SELECT * FROM skins INNER JOIN personnages ON skins._personnage_id=personnages.personnage_id WHERE personnage_poste ='.$poste.'AND champion_prix = '.$prix.';',
//         '11' => 'SELECT * FROM skins INNER JOIN personnages ON skins._personnage_id=personnages.personnage_id WHERE personnage_poste ='.$poste.'AND champion_rarete = '.$rarete.';',
//         '15' => 'SELECT * FROM skins INNER JOIN personnages ON skins._personnage_id=personnages.personnage_id WHERE champion_prix = '.$prix.'AND champion_rarete = '.$rarete.';',
//         '16' => 'SELECT * FROM skins INNER JOIN personnages ON skins._personnage_id=personnages.personnage_id WHERE personnage_poste ='.$poste.'AND champion_prix = '.$prix.' AND champion_rarete = '.$rarete.';'
//     ];
//     return $correspondance[$compteur];
// }





    function afficherResultat($commandeSQL){
        $search = $commandeSQL; 
        $resultat_search = $mabd->query($search); 
        
        $lignes_resultat_search = $resultat_search->rowCount();
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
        } else { echo '<p>Pas de résultat !</p>'; 
        }
        $mabd = null;
    }

?>


// $compteur=0;
                // if ($compteur>0){
                //     if (!empty(poste)){
                //         $compteur += '1';
                //     } elseif (!empty(prix)){
                //         $compteur += '5';
                //     } elseif (!empty(rarete) ){
                //         $compteur += '10';
                //     } 
                //         afficherFiltre($compteur);
                // } else {
                //     echo 'pas de filtres';
                // }
            
            
            
            if (empty($_POST['search']) AND $compteur=0){
                header('Location: form_recherche.php');
            } else {
                afficherResultat('SELECT * FROM skins INNER JOIN personnages ON skins._personnage_id=personnages.personnage_id WHERE personnage_nom = "'.$_POST['search'].'"');
            }