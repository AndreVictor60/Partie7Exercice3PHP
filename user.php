<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 7 Exercice 3</title>
  </head>
  <body>
    <?php
      if (isset($_GET['firstName']) AND isset($_GET['lastName']))
      {
        echo 'Bonjour, ' . $_GET['firstName'] . ' ' . $_GET['lastName'];
      }
     ?>
  </body>
</html>
