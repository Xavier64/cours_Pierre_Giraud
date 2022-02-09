<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions</title>
</head>
<body>
    <?php
        // function Bonjour(){
        //     echo "Bonjour à tous";
        // }
        // Bonjour();

        // function BonjourUtilisateur($prenom){
        //     echo 'Bonjour'. $prenom .'!';
        // }
        // BonjourUtilisateur('Xav');


        // function NomAge($prenom,$age){
        //     echo $prenom .' à '. $age . ' ans .';
        // }

        // NomAge('Xav', 34);

        function DireBonjour(){
            return "Bonjour";
        }
        function DireBonsoir(){
            echo "Bonsoir";
        }

        DireBonjour();
        DireBonsoir();
        echo DireBonjour();

       

    ?>
</body>
</html>