<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 4</title>

</head>

<body>
    
    <h1>Exercice 8</h1>    
    
    <?php
    
    function addition($number1 = 1, $number2 = 2, $number3 = 3) // lorsqu'on initialise les paramètres dans la fonction, on leurs donne une valeur par défaut
    {
        $addition = $number1 + $number2 + $number3;
        echo $addition;
    }
    
    
    addition(); // la fonction va utiliser les valeurs par défaut, puisqu'on à pas rentré de paramètres
    addition(5,6,7);
    ?>  
    
    
</body>
</html>