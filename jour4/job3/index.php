<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test $_POST</title>
</head>
<body>

    <!-- Formulaire de type POST -->
    <form action="mon_fichier.php" method="POST">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required><br><br>

        <label for="age">Âge:</label>
        <input type="number" name="age" id="age" required><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    // Afficher le nombre d'arguments dans $_POST
    echo "Le nombre d'arguments dans \$_POST est : " . count($_POST);
    ?>

</body>
</html>
