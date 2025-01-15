<?php


$str = "Les choses que l'on possède finissent par nous posséder.";


$inverse = "";
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $inverse .= $str[$i];
}
echo "Résultat avec la boucle : " . $inverse . "\n";


$inverse2 = strrev($str);
echo "Résultat avec strrev() : " . $inverse2;
?>