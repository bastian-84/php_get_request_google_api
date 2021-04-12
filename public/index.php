<?php
$sHeader = './assets/header.php';
$sNav = './assets/nav.php';
$sMain = './assets/main.php';
$sFooter = './assets/footer.php';
$sStylesheet = './assets/stylesheet.css';
$sScript = './assets/script.js';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    <?php
        require( $sStylesheet );
    ?>
    </style>
    <?php
        
        include( $sHeader );
        include( $sNav );
        include( $sMain );
        include( $sFooter );
        
    ?>
    <script>
    <?php
        include( $sScript );
    ?>
    </script>
</body>
</html>
