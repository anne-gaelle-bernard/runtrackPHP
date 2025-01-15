<?php

$str = "Dans l'espace, personne ne vous entend crier";


$compteur = 0;

for ($i = 0; $i < strlen($str); $i++) {
    $compteur++;
    echo "Caractère actuel : '" . $str[$i] . "' - Position : " . $compteur . "\n";
}

echo "\nNombre total de caractères : " . $compteur . "\n";

echo "Vérification avec strlen() : " . strlen($str) . "\n";
?>