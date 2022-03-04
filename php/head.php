<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titre ?></title>
    <link rel="stylesheet" href="<?php echo $styleMain ?>">
    <link rel="stylesheet" href="<?php echo $style ?>">
    <link rel="stylesheet" href="<?php echo $style2 ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/parsley.min.js"></script>
    <link rel="stylesheet" href="../css/parsley.css">
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>

    <script>
        $(document).ready(function() {
            $('#filter').hide();
            $('#filter-btn2').hide();
            $('#filter-btn1').click(function() {
                $('#filter').slideToggle();
                $('#filter-btn2').show();
                $('#filter-btn1').hide();
            });
            $('#filter-btn2').click(function() {
                $('#filter').slideToggle();
                $('#filter-btn2').hide();
                $('#filter-btn1').show();
            });
        });
    </script>
</head>
<body>