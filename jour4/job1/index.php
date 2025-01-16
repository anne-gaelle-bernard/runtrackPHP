<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="name">Nom de famille :</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="city">Ville :</label>
        <input type="text" id="city" name="city" required><br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>

<?php
// Activer le rapport d'erreurs
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Vérifier si $_GET contient des données
if (!empty($_GET)) {
    // Compter le nombre d'arguments dans $_GET
    $nombre_arguments = count($_GET);

    // Afficher le résultat
    echo "Nombre d'arguments reçus : " . htmlspecialchars($nombre_arguments) . "<br>";

    //  Afficher les arguments pour vérifier
    echo "<pre>";
    print_r(array_map('htmlspecialchars', $_GET)); // Montre les clés et les valeurs
    echo "</pre>";
} else {
    echo "Aucun argument reçu.";
}
?>
