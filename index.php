<?php 
$titre = "Accueil";
$styleMain = "css/styleMain.css";
$style = "css/styleIndex.css";
$menuNav = "images/deco/menu.png";
require('php/head.php');

$index = "index.php";
$listing = "views/listing.php";
$admin = "views/admin.php";
$search = "views/form_recherche.php";


?>
<script>
    $(document).ready(function() {
        $('#navbar').show();
        });
</script>

<main>
    <?php require('php/nav.php'); ?>
    <div>
        <img id="bgImage" src="images/deco/bg_image.jpeg" alt="bg-image"> 
        <img id="logo" src="images/deco/logo.png" alt="bg-image">
    </div>
</main>
    
<?php require('php/footer.php'); ?>


