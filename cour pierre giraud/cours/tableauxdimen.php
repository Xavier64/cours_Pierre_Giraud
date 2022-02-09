<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableaux dimensionnels</title>
</head>
<body>
    <?php

    $membres = array(
        array('Pierre',24,"pierre@pierre.com"),
        array('Paul',32,"paul@paul.com"),
        array("Jacques", 40 , "jacques@jacques.com")
    );

    echo $membres[0][0]." à ".$membres[0][1]. " ans. Son mail est " . $membres[0][2] .'<br/>';
    echo $membres[1][0]." à ".$membres[1][1]. " ans. Son mail est " . $membres[1][2] .'<br/>';
    echo $membres[2][0]." à ".$membres[2][1]. " ans. Son mail est " . $membres[2][2] .'<br/>';

    for($ligne = 0; $ligne < 3 ; $ligne ++){
        $membre_no = $ligne + 1;
        echo "Membre numéro " . $membre_no.'<br/>';
        echo "<ul>";
        for ($col = 0 ; $col < 3 ; $col ++){
            echo "<li>". $membres[$ligne][$col].'</li>';
            
        }
        echo '</ul>';
    }

    ?>


</body>
</html>