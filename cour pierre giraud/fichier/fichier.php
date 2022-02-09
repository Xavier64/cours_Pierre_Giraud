<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Fichiers</title>
</head>
<body>
    <?php
    $texte = fopen("fichier.txt", "r+");
    $affichagetexte = fread($texte, 1000);
    echo $affichagetexte;
    fclose($texte);
    ?>
</body>
</html>