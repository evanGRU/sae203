<?php 
    require '../public/php/fonctions.lib.php';
    headVariable("Gestion SKINS", "../public/css/styleMain.css", "../public/css/styleAdmin.css", "../public/images/deco/logo_min.png", '../public/php/head.php', "../index.php", "../listing.php", "../views/champions.php", "../views/fav.php", "../views/panier.php", "../views/login.php","admin.php", "../form_recherche.php", "../public/php/nav.php");
?>

<main>
    <section id="hero-admin">
        <span></span>
        <div id="hero-title">
            <?php
	        require '../public/php/lib_crud.inc.php';
	
	        $nom=$_POST['nom'];
	        $prix=$_POST['prix'];
	        $sortie=$_POST['sortie'];
	        $rarete=$_POST['rarete'];
	        $perso=$_POST['perso'];
	
	        $imageType=$_FILES["photo"]["type"];
	        if ( ($imageType != "image/png") &&
	            ($imageType != "image/jpg") &&
	            ($imageType != "image/jpeg") ) {
	                echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
	                echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
	                die();
	        }
	
	        $nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];
	
	        if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
	            if(!move_uploaded_file($_FILES["photo"]["tmp_name"], 
	            "../public/images/uploads/".$nouvelleImage)) {
	                echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
	                die();
	            }
	        } else {
	            echo '<p>Problème : image non chargée...</p>'."\n";
	            die();
	        }
	
	        $co=connexionBD();
	        ajouterSkin($co, $nom, $prix, $sortie, $rarete, $nouvelleImage, $perso);
	        deconnexionBD($co);
	    ?>
        </div>
		<a href="gestion_table1.php" id="gestion-btn">GESTION SKINS</a>

    </section>

</main>
    
<?php require '../public/php/foot.php'; ?>
