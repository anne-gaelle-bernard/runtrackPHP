<?php
$booleanVar = true; 
$intVar = 42; 
$stringVar = "Hello LaPlateforme!"; 
$floatVar = 3.14; 


echo "<!DOCTYPE html>";
echo "<html lang='fr'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Types de Variables</title>";
echo "<style>";
echo "table { border-collapse: collapse; width: 50%; margin: 20px auto; }";
echo "th, td { border: 1px solid #000; padding: 8px; text-align: center; }";
echo "th { background-color: #f4f4f4; }";
echo "</style>";
echo "</head>";
echo "<body>";

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Type</th>";
echo "<th>Nom</th>";
echo "<th>Valeur</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td>Boolean</td>";
echo "<td>booleanVar</td>";
echo "<td>" . ($booleanVar ? 'true' : 'false') . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Integer</td>";
echo "<td>intVar</td>";
echo "<td>$intVar</td>";
echo "</tr>";
echo "<tr>";
echo "<td>String</td>";
echo "<td>stringVar</td>";
echo "<td>$stringVar</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Float</td>";
echo "<td>floatVar</td>";
echo "<td>$floatVar</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";

echo "</body>";
echo "</html>";
?>
