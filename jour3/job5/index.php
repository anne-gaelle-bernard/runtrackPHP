<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";


$dic = array(
    "voyelles" => 0,
    "consonnes" => 0
);

$voyelles = array('a', 'e', 'i', 'o', 'u', 'y', 'à', 'â', 'é', 'è', 'ê', 'ë', 'î', 'ï', 'ô', 'û', 'ü');

$str = strtolower($str);


for ($i = 0; $i < strlen($str); $i++) {
    $caractere = $str[$i];
  
    if (ctype_alpha($caractere)) {
        if (in_array($caractere, $voyelles)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

echo "<table border='1'>
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>" . $dic["voyelles"] . "</td>
            <td>" . $dic["consonnes"] . "</td>
        </tr>
    </tbody>
</table>";
?>