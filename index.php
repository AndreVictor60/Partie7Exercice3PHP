<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Partie 7 Exercice 3</title>
    </head>

    <body>
        <p>Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.</p>
        <hr>
        <!-- Création du formulaire
     Action = L'attribut sert à définir la page appelée par le formulaire
     Method(variable globale) = Méthode d'envoie du formulaire GET ou POST(99%)
        -->
        <form action="user.php" method="get">
            <!-- Ajout des inputs avec leurs labels -->
            <label for="firstName">Nom :</label><input type="text" name="firstName">
            <label for="lastName">Prénom :</label><input type="text" name="lastName">
            <!-- Submit : le bouton de validation du formulaire qui commande l'envoi des donnée-->
            <input type="submit" value="valider">
        </form>
        <a href="../index.php"><button type="button">Retour</button></a>
    </body>
</html>
