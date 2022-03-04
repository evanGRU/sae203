<?php 

    $mabd = new PDO('mysql:host=localhost;port=8888;dbname=mmi21d10;charset=UTF8;', 'root', 'root');
    $mabd->query('SET NAMES utf8;');
         
    $req ="SELECT * FROM skins INNER JOIN personnages ON skins._personnage_id=personnages.personnage_id"; 
    $resultat = $mabd->query($req); 

?>