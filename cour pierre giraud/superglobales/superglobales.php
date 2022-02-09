<?php
    session_start();  
    session_destroy(); // Detruit la session      
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


    <?php
    
    $_SESSION["prenom"] = "Xav";
    $_SESSION["age"] = 34;
    $_SESSION["sport"] = "NOPE";

    ?>
    <!-- //COOKIE se met tout en haut de la page
        // $nom_cookie = "utilisateur";
        // $valeur_cookie = "Xav";

        // setcookie($nom_cookie, $valeur_cookie, time()+ 3600,"/","xav.pincon.fr",false,true);

        // $nom_cookie_2 = "test";
        // $valeur_cookie_2 = "Ceci est un test";

        // setcookie($nom_cookie_2,$valeur_cookie_2,time()+3600);

        // echo $_COOKIE["test"];
        // setcookie($nom_cookie_2,"aaa",time()-3600);

?> -->
        <!-- // echo $_SERVER["PHP_SELF"]."<br/>";
        // echo $_SERVER["SERVER_ADDR"]."<br/>";
        // echo $_SERVER["SERVER_NAME"]."<br/>";
        // echo $_SERVER["SCRIPT_NAME"]."<br/>";
        // echo $_SERVER["HTTP_HOST"]."<br/>"; -->

       

    

</body>
</html>
