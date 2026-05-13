<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "hello word" ;
    ?>

    <?php
        echo "Ini adalah <br/>Sebuah syntax<br/>PHP pertama saya😁 ";
    
    ?>

    <?php
        $panjang = 6;
        $Lebar = 7;

        $luas = $panjang*$Lebar;

        echo "luas persegi panjang adalah $luas <br/>"; //double quote/petik
        echo 'luas persegi panjang adalah ' . $luas . '  <br/>';//single quote/petik
    ?>
</body>
</html>