<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="process.php" method="GET">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age"><br><br>

        <label for="city">Ville :</label>
        <input type="text" id="city" name="city"><br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>

<?php
// Vérifier si $_GET contient des données
if (!empty($_GET)) {
    // Compter le nombre d'arguments dans $_GET
    $nombre_arguments = count($_GET);

    // Afficher le résultat
    echo "Nombre d'arguments reçus : $nombre_arguments<br>";

    // Facultatif : Afficher les arguments pour vérifier
    echo "<pre>";
    print_r($_GET); // Montre les clés et les valeurs
    echo "</pre>";
} else {
    echo "Aucun argument reçu.";
}
?>
