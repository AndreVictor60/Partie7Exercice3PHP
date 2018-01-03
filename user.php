<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Partie 7 Exercice 3</title>
    </head>
    <body>
        <?php
        // Vérification des GET s'ils existent
        if (isset($_GET['firstName']) AND isset($_GET['lastName'])) {
            // htmlspecialchars qui sert à échapper le code HTML ( Éviter les failles XSS )
            echo 'Bonjour, ' . htmlspecialchars($_GET['firstName']) . ' ' . htmlspecialchars($_GET['lastName']);
        }
        ?>
    </body>
</html>
