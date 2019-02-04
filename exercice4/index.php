<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 4</title>

</head>

<body>
    
    <h1>Exercice 4</h1>
    <?php
    
    function checkNumbers($number1,$number2){
        
        if ($number1 > $number2)
        {
            echo 'Le premier nombre est plus grand.';
        }
        else if ($number1 < $number2)
        {
            echo 'Le premier nombre est plus petit.';
        }
        else if ($number1 == $number2)
        {
            echo 'Les deux nombres sont identiques.';
        }
    }
    
    checkNumbers(10.8,3);
    
    ?>  
    
    
</body>
</html>