<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$caracteres = str_split($str);


$premier = $caracteres[0];


for ($i = 0; $i < strlen($str) - 1; $i++) {
    $caracteres[$i] = $caracteres[$i + 1];
}

$caracteres[strlen($str) - 1] = $premier;

$nouvelle_str = implode('', $caracteres);

echo "Chaîne originale : " . $str . "\n";
echo "Chaîne après rotation : " . $nouvelle_str;
?>