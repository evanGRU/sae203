<?php

    function headVariable($titrePage, $style1, $style2, $icon, $requireHead, $lienIndex, $lienListing, $lienChampions, $lienFav, $lienPanier, $lienLogin, $lienAdmin, $lienSearch, $requireNav){
        $titre = $titrePage;
        $styleMain = $style1;
        $style = $style2;
        $favicon = $icon;
        require $requireHead; 

        $index = $lienIndex;
        $listing = $lienListing;
        $champions = $lienChampions;
        $fav = $lienFav;
        $panier = $lienPanier;
        $login = $lienLogin;
        $admin = $lienAdmin;
        $search = $lienSearch;
        require $requireNav; 
    }

?>
