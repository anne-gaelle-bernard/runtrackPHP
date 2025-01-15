<?php
// Boucle pour afficher les nombres de 0 à 1337
for ($i = 0; $i <= 1337; $i++) {
    if ($i === 42) {
        // Affichage du nombre 42 en gras et souligné
        echo "<strong><u>$i</u></strong><br>";
    } else {
        // Affichage des autres nombres
        echo "$i<br>";
    }
}
?>
