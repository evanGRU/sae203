<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titre ?></title>
    <link rel="stylesheet" href="<?php echo $styleMain ?>">
    <link rel="stylesheet" href="<?php echo $style ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/parsley.min.js"></script>
    <link rel="stylesheet" href="../css/parsley.css">
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>

    <script>
        $(document).ready(function() {
            $('#poste').hide();
            $('#filter-btn').click(function() {
                $('#poste').slideToggle();
            });
        });
    </script>
</head>
<body>