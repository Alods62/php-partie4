<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 4</title>

</head>

<body>
    
    <h1>Exercice 5</h1>
    <?php
    
    function concatenateStringAndNumber($string,$number){
        echo $string . ' ' . $number;
    }
    
    concatenateStringAndNumber("Quel est le numéro de l'exercice ?",5);
    
    ?>  
    
    
</body>
</html>