<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction array</title>
</head>
<body>
    <?php

    // ARRAY_KEYS
    // $voitures = array (
    //     "Citroen" => "DS3",
    //     "Renault" => "Clio",
    //     "Peugeot" => "306",
    //     "Peugeot2" => 306
    // );

    // print_r(array_keys($voitures,"306",false)); 

    // ARRAY_VALUE
    //     $loisirs = array(
    //         "sport" => "Trail",
    //         "voyage" => "Ecosse",
    //         "musique" => "Guitare"
    //     );
    //    echo "<pre>"; 
    //    print_r(array_values($loisirs));
    //     echo "</pre>";


        // ARRAY_KEY_EXISTS

        // $voitures = array (
        //         "Citroen" => "DS3",
        //         "Renault" => "Clio",
        //         "Peugeot" => "306",
        //         "Peugeot2" => 306
        //     );

        //     if(array_key_exists("Citroen", $voitures)){
        //         echo 'La clef existe';
        //     }else{
        //         echo "La clef n'existe pas !";
        //     }

        // ARRAY_SEARCH

        // $voitures = array (
        //             "Citroen" => "DS3",
        //             "Renault" => "Clio",
        //             "Peugeot" => "306",
        //             "Peugeot2" => 306
        //         );
    
            //   echo array_search(306, $voitures , true);
        
        // IN_ARRAY
        
        // $prenoms = array ("Pierre" , "Paul", "Jacques");

        // if(in_array("Julien",$prenoms, )){
        //     echo "Prénom trouvé";
        // }else{
        //     echo "Prénom non trouvé";
        // }
        
        // FONCTION POUR COMPTER ET COMPARER

            // COUNT

        // $sport = array("natation", "velo", "course");
        // echo count($sport);

        // ARRAY_COUNT_VALUES

        // $compter = array("A","velo", "natation", "velo","A");
        // echo "<pre>";
        // print_r(array_count_values($compter));
        // echo "</pre>";

        // ARRAY_DIFF_ASSOC

        // $compare = array("a"=>"bleu" , "b" => "vert", "c" => "jaune");
        // $comparant = array("a" => "bleu","b" => "vert");

        // print_r(array_diff_assoc($compare, $comparant)) ;

        // TIME STAMP time()

        // Date
        // echo date("d-m'Y");

        // EXEMPLE DATE

        // $jour = array(
        //     "",
        //     "Lundi",
        //     "Mardi",
        //     "Mecredi",
        //     "Jeudi",
        //     "Vendredi",
        //     "Samedi",
        //     "Dimanche"
        // );

        // $mois = array(
        //     "",
        //     "Janvier",
        //     "Février",
        //     "Mars",
        //     "Avril",
        //     "Mai",
        //     "Juin",
        //     "Juillet",
        //     "Aout",
        //     "Septembre",
        //     "Octobre",
        //     "Novembre",
        //     "Décembre"
        // );

        // $datefr = $jour[date("N")]." ".date("d")." ".$mois[date("n")]." ".date("Y");
        // echo "Nous sommes le ". $datefr;

        // AUTRE EXEMPLE

        // setlocale(LC_TIME,'fr_FR');

        // echo "Nous sommes le " . strftime("%A %d %B %Y")."<br/>";

        // VERIFIVATION DATE

        // $date1 = checkdate(12,31,2021);
        // $date2 = checkdate(13,31,2021);
        // $date3 = checkdate(01,25,-100);

        // if($date1){
        //     echo "La date est valide ! <br/>";
        // }else{
        //     echo "La date n'est pas valide ! <br/>";
        // }
        // if($date2){
        //     echo "La date est valide ! <br/>";
        // }else{
        //     echo "La date n'est pas valide ! <br/>";
        // }

        // if($date3){
        //     echo "La date est valide ! <br/>";
        // }else{
        //     echo "La date n'est pas valide ! <br/>";
        // }

        // GETDATE
        // echo "<pre>";
        // print_r(getdate()) ;
        // echo "</pre>";

        // echo "<br/><br/>";

        // echo "<pre>";  
        // print_r(getdate(1));
        // echo "</pre>";

    ?>
</body>
</html>