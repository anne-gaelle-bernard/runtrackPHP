<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="name">Nom  :</label>
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
   
    echo "Nombre d'arguments reçus : " . count($_GET) . "<br>";
?>
