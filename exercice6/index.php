<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 4</title>

</head>

<body>
    
    <h1>Exercice 6</h1>
    <?php
    
    function whoAreYou($lastname,$firstname,$age)
    {
        echo 'Bonjour ' . $lastname . ' ' . $firstname . ',tu as ' . $age .' ans.';
    }
    
    whoAreYou('Dupont','Jonathan',11);
    
    ?>  
    
    
</body>
</html>