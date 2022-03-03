<?php 

    try {
        $mabd = new PDO('mysql:host=localhost;dbname=sae203;charset=UTF8;', 'sae203', 'devWeb10');
        $mabd->query('SET NAMES utf8;');
    } catch (PDOException $e) {
        print "Erreur : ".$e->getMessage().'<br />'; die();
    }

                
    $req ="SELECT * FROM skins INNER JOIN personnages ON skins._personnage_id=personnages.personnage_id"; 
    try {
        $resultat = $mabd->query($req); 
    } catch (PDOException $e) {
        print "Erreur dans la base de données des personnages : ".$e->getMessage().'<br />';
        die();
    }
?>