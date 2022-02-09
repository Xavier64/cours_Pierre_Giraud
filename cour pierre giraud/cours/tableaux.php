<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableaux</title>
</head>
<body>
    <?php 
    $prenom = array ('Pierre', 'Paul' , 'Jacques');
    
    // for($x=0;$x<=2;$x++){
    //     echo$prenom[$x].'<br/>';
    // }

    foreach($prenom as $items){
            echo $items .'<br/>';
    }

    $age = array(
        'Pierre'=> 24,
        'Paul'=> 30,
        'Jacques' => "non renseigné"
    );

    foreach ($age as $valeurs){
        echo $valeurs .' <br/>';
    }

    foreach($age as $clef => $valeurs){
        echo "L'age de " .$clef. " est ". $valeurs."<br/><br/><br/>";
    }

    echo '<pre>';
    print_r($age);
    echo '</pre>';
   
    ?>
</body>
</html>