<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 4</title>

</head>

<body>
    
    <h1>Exercice 7</h1>
    <?php
    
    $randomAge = rand(1,100);
    $gender = ['Homme','Femme'];
    $randomGender = $gender[rand(0,1)];
    
    
    function whoAreYou($age,$gender)
    {
        if ($gender == "Femme")
        {
            echo ($age >= 18) ? 'Vous êtes une femme et vous êtes majeure.' : 'Vous êtes une femme et vous êtes mineure.';
        }
        else if ($gender == "Homme")
        {
            echo ($age >= 18) ? 'Vous êtes un homme et vous êtes majeur.' : 'Vous êtes un homme et vous êtes mineur.';
        }
    }
    
    whoAreYou($randomAge,$randomGender);
    
    ?>  
    
    
</body>
</html>