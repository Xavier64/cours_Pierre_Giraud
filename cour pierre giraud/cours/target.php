<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Target</title>
</head>

<body>
  <p>Bonjour
    <?php

    echo htmlspecialchars($_POST['prenom']);
    echo stripslashes($_POST['prenom']);
     ?>
      , fais comme chez toi ! </p>
  <p>Tu en t'appelles pas
   <?php  
    echo htmlspecialchars($_POST['prenom']);
    echo strip_tags($_POST['prenom']);
    ?>
    ? J'ai du mal comprendre
  </p>
  <p>Clique <a href="form.php">ici</a> pour retaper ton prénom</p> -->

  <!-- Autre securité pour le formulaire 
  trim()
  stripslashes()

</body>

</html>