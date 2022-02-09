<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction Utiles</title>
</head>
<body>
    <?php 
        echo strlen("Bonjour à tous"). "<br/>" ;
        echo str_word_count("Bonjour à tous",0,"à").'<br/>';
        echo str_word_count("Salut l'ami") . '<br/>';
        echo str_word_count("Bonjour à tous"). '<br/>';

        echo str_repeat("Salut à tous !". "<br/>",4);

        $texte = "Bonjour , comment allez-vous ?";

        echo str_ireplace("Bonjour","Bonsoir", $texte , $i);
        echo "<br/> Nombre de rmplacement : " . $i . "<br/>";

        $minmaj = "BonJour, VouS AllEZ Bien?";
        echo strtolower($minmaj) . "<br/>";
        echo strtoupper($minmaj) . "<br/>";

        echo strpos("Bonjour" , "o")."<br/>";
        echo strpos("Bonjour à tous ", "tous")."<br/>";
        echo strpos("Bonjour", "e"). "<br/>";



        $str = "J'aime le <strong>PHP</strong>!";
        echo htmlspecialchars($str). "<br/>";
        // < => &lt
        // > => &gt
        // & => &amp
        // " => &quot
        // ' => &#039

       echo nl2br("Bonjour!
            Comment ça va?"). "<br/>";
      
        $ch2tb = "Bonjour à tous" ;

        print_r(explode(" ", $ch2tb)). "<br/>" ;
        echo "<br/><br/>";
        print_r(str_split("Bonjour", 2)). "<br/>"; 
        echo "<br/><br/>";

        $tb2ch = array("Bonjour" , "à" , "tous !");
        print_r(implode(" ", $tb2ch)) . "<br/>";
        echo "<br/><br/>";
        print_r(join(" " , $tb2ch)) ;


    ?>
</body>
</html>