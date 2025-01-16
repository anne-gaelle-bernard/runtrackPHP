<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des arguments $_GET</title>
</head>
<body>

    <!-- Formulaire de type GET -->
    <form action="votre_fichier.php" method="GET">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="age">Âge:</label>
        <input type="number" name="age" id="age"><br><br>

        <label for="ville">Ville:</label>
        <input type="text" name="ville" id="ville"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    // Afficher les arguments $_GET dans un tableau HTML
    if (!empty($_GET)) {
        echo "<table border='1'>
                <tr>
                    <th>Argument</th>
                    <th>Valeur</th>
                </tr>";

        foreach ($_GET as $key => $value) {
            echo "<tr>
                    <td>" . htmlspecialchars($key) . "</td>
                    <td>" . htmlspecialchars($value) . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "Aucun argument $_GET n'a été transmis.";
    }
    ?>

</body>
</html>
