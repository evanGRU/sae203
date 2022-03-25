<?php

    require 'secretxyz123.inc.php';





    function connexionBD(){
        
        $mabd = null;

        try {
            // 127.0.0.1; - localhost
            // 3306 - 8888
            // sae203 - mmi21d10
        $mabd = new PDO('mysql:host=127.0.0.1;port=3306;
                    dbname=sae203;charset=UTF8;', 
                    LUTILISATEUR, LEMOTDEPASSE);
        $mabd->query('SET NAMES utf8;');
        } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
        }
        return $mabd;
    }





    function deconnexionBD(&$mabd) {
        $mabd=null;
    }





    function afficherCatalogue($mabd, $requete) {
        try {
            $resultat = $mabd->query($requete);
        } catch (PDOException $e) {
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        
        $lignes_resultat = $resultat->rowCount();
        if ($lignes_resultat>0) { 
        $i=0;
        $a=$lignes_resultat;
        while (($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) && ($i<$a)) {
            echo '<article class="article">';
            echo '  <div class="card-image">
                        <img src="public/images/uploads/'.$ligne["skin_photo"].'" alt="skin">
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
                                    <li><span>PRIX : </span>'.$ligne["skin_prix_rp"].' <img src="public/images/deco/rp.svg" alt="rp"></li>
                                </ul>
                                <div class="card-lien">
                                    <a href="" class="txt-achat">ajouter au panier</a>
                                    <i class="fa-regular fa-heart fav"></i>
                                </div>
                            </div>
                        </div>
                    </div>';
            echo '</article>'; 
            $i++;   
        }
        } else { 
        }
    }



    function afficherChampions($mabd){
        
        $req="SELECT * FROM personnages ORDER BY personnage_nom ASC";

        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }

        foreach($resultat as $value){
            echo '  <article>
                        <div class="champImg">
                            <img src="../public/images/uploads/'.$value["personnage_photo"].'" alt="">
                        </div>
                        <div class="champName">
                            <h1>'.ucwords($value["personnage_nom"]).'</h1>
                        </div>
                    </article>';
        }
        
    }



    

    function afficherListe($mabd) {
        $req = "SELECT * FROM skins 
            INNER JOIN personnages 
            ON skins._personnage_id = personnages.personnage_id
            ORDER BY _personnage_id ASC, skin_date_sortie ASC";


        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }


        echo '<table>'."\n";
        echo '<thead><tr><th>NOM</th><th>PRIX</th><th>SORTIE</th><th>RARETÉ</th><th>PHOTO</th><th>MODIFIER</th><th>SUPPRIMER</th></tr></thead>'."\n";
        echo '<tbody>'."\n";
        foreach ($resultat as $value) {
            echo '<tr>'."\n";
            echo '<td>'.strtolower($value['skin_nom']).'</td>'."\n";
            echo '<td>'.$value['skin_prix_rp'].'</td>'."\n";
            echo '<td>'.$value['skin_date_sortie'].'</td>'."\n";
            echo '<td>'.$value['skin_rarete'].'</td>'."\n";
            echo '<td><img class="photo" src="../public/images/uploads/'.$value['skin_photo'].'" alt="image_'.$value['skin_id'].'" /></td>'."\n";

            echo '<td><a href="table1_update_form.php?num='.$value['skin_id'].'">modifier</a></td>'."\n";
            echo '<td><a href="table1_delete.php?num='.$value['skin_id'].'">supprimer</a></td>'."\n";
            echo '</tr>'."\n";
        }
        echo '</tbody>'."\n";
        echo '</table>'."\n";
    }





    function afficherListe2($mabd) {
        $req = "SELECT * FROM personnages 
            ORDER BY personnage_nom ASC";


        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }





        echo '<table>'."\n";
        echo '<thead><tr><th>NOM</th><th>POSTE</th><th>PHOTO</th><th>MODIFIER</th><th>SUPPRIMER</th></tr></thead>'."\n";
        echo '<tbody>'."\n";
        foreach ($resultat as $value) {
            echo '<tr>'."\n";
            echo '<td>'.strtolower($value['personnage_nom']).'</td>'."\n";
            echo '<td>'.$value['personnage_poste'].'</td>'."\n";
            echo '<td><img class="photo" src="../public/images/uploads/'.$value['personnage_photo'].'" alt="image_'.$value['personnage_id'].'" /></td>'."\n";

            echo '<td><a href="table2_update_form.php?num='.$value['personnage_id'].'">modifier</a></td>'."\n";
            echo '<td><a href="table2_delete.php?num='.$value['personnage_id'].'">supprimer</a></td>'."\n";
            echo '</tr>'."\n";
        }
        echo '</tbody>'."\n";
        echo '</table>'."\n";
    }





    function afficherChampionsOptions($mabd) {
        $req = "SELECT * FROM personnages";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }

        foreach ($resultat as $value) {
            echo '<option value="'.$value['personnage_id'].'">'; // id de l'auteur
            echo $value['personnage_nom']; // prénom espace nom
            echo '</option>'."\n";
        }
    }





    function ajouterSkin($mabd, $nom, $prix, $sortie, $rarete, $photo, $perso)
    {   
        
        $req = 'INSERT INTO skins (skin_nom, skin_prix_rp, skin_date_sortie, skin_rarete, skin_photo, _personnage_id) VALUES ("'.$nom.'","'.$prix.'","'.$sortie.'","'.$rarete.'","'.$photo.'","'.$perso.'")';

        
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo '<h2>LE SKIN "' . $nom .'"</h2>' . "\n";
            echo '<h1>A ÉTÉ AJOUTÉ.</h1>' . "\n";
        } else {
            echo '<h1>Erreur lors de l\'ajout.</h1>' . "\n";
            die();
        }
    }





    function ajouterChampion($mabd, $nom, $poste, $photo)
    {   
        
        $req = 'INSERT INTO personnages (personnage_nom, personnage_poste, personnage_photo) VALUES ("'.$nom.'","'.$poste.'","'.$photo.'")';

        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo '<h2>LE CHAMPION "' . $nom .'"</h2>' . "\n";
            echo '<h1>A ÉTÉ AJOUTÉ.</h1>' . "\n";
        } else {
            echo '<h1>Erreur lors de l\'ajout.</h1>' . "\n";
            die();
        }
    }





    function effacerSkin($mabd, $id) {
        $req = 'DELETE FROM skins WHERE skin_id = '.$id.'';
        try{
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount()==1) {
            echo '<h2>Le skin '.$id.'</h2>'."\n";
            echo '<h1> a été supprimé.</h1>'."\n";
        } else {
            echo '<p>Erreur lors de la suppression.</p>'."\n";
            die();
        }
    }


    function suppPhotoSkin($mabd, $id){
        $req = 'SELECT * FROM skins WHERE skin_id = '.$id.'';
        $resultat = $mabd->query($req);

        foreach ($resultat as $value){
            $fichier = '../public/images/uploads/'.$value['skin_photo'];
            if( file_exists ($fichier)){
                unlink($fichier ) ;
            }
        }
    }





    function effacerChampion($mabd, $id) {
        $req = 'DELETE FROM personnages WHERE personnage_id = '.$id.'';
        try{
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount()==1) {
            echo '<h2>Le champion '.$id.'</h2>'."\n";
            echo '<h1> a été supprimé.</h1>'."\n";
        } else {
            echo '<p>Erreur lors de la suppression.</p>'."\n";
            die();
        }
    }





    function getSkin($mabd, $id) {
        $req = 'SELECT * FROM skins WHERE skin_id ='.$id;
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }

        return $resultat->fetch();
    }





    function getChampion($mabd, $id) {
        $req = 'SELECT * FROM personnages WHERE personnage_id ='.$id;
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }

        return $resultat->fetch();
    }





	function afficherChampionsOptionsSelectionne($mabd, $idChampion) {
        $req = "SELECT * FROM personnages";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        foreach ($resultat as $value) {
            echo '<option value="'.$value['personnage_id'].'"';
            if ($value['personnage_id']==$idChampion) {
                echo ' selected="selected"';
            }
            echo '>';
            echo $value['personnage_nom'];
            echo '</option>'."\n";
        }
    }


    function modifierSkin($mabd, $id, $nom, $prix, $sortie, $rarete, $photo, $perso)
    {   
        
        $req = 'UPDATE skins SET skin_nom = "'.$nom.'", skin_prix_rp = "'.$prix.'", skin_date_sortie = "'.$sortie.'", skin_rarete = "'.$rarete.'", skin_photo = "'.$photo.'", _personnage_id = '.$perso.' WHERE skin_id='.$id;
        

        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo '<h2>LE SKIN "' . $nom .'"</h2>' . "\n";
            echo '<h1>A ÉTÉ MODIFIÉ.</h1>' . "\n";
        } else {
            echo '<h1>ERREUR LORS DE LA MODIFICATION.</h1>' . "\n";
            die();
        }
    }   




    function modifierChampion($mabd, $id, $nom, $poste, $photo)
    {   
        
        $req = 'UPDATE personnages SET personnage_nom = "'.$nom.'", personnage_poste = "'.$poste.'", personnage_photo = "'.$photo.'" WHERE personnage_id='.$id;
        echo $req;

        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo '<h2>LE CHAMPION "' . $nom .'"</h2>' . "\n";
            echo '<h1>A ÉTÉ MODIFIÉ.</h1>' . "\n";
        } else {
            echo '<h1>ERREUR LORS DE LA MODIFICATION.</h1>' . "\n";
            die();
        }
    }



?>