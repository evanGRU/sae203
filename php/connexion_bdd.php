<?php 

    $mabd = new PDO('mysql:host=localhost;dbname=sae203;charset=UTF8;', 'sae203', 'devWeb10');
    $mabd->query('SET NAMES utf8;');
         
    $req ="SELECT * FROM skins INNER JOIN personnages ON skins._personnage_id=personnages.personnage_id"; 
    $resultat = $mabd->query($req); 

?>