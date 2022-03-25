<?php

if ($_GET['nom'] == 'admin' && $_GET['mdp'] == 'slayhey'){
    header('Location: ../admin/admin.php');
} else {
    header('Location: login.php');
}

?>