<?php
function bubblesort($tab, $croissant) {
    
    $n = count($tab);

    for ($i = 0; $i < $n; $i++) {
      
        for ($j = 0; $j < $n - $i - 1; $j++) {
            
            if ($croissant) {
                if ($tab[$j] > $tab[$j + 1]) {
       
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            } else {
                if ($tab[$j] < $tab[$j + 1]) {
                   
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            }
        }
    }

    return $tab;
}

// Exemple d'utilisation
$tab_croissant = ["abc", "ghi", "def"];
$tab_decroissant = ["abc", "ghi", "def"];

echo "Tri croissant : " . implode(", ", bubblesort($tab_croissant, true)) . "\n";
echo "Tri décroissant : " . implode(", ", bubblesort($tab_decroissant, false)) . "\n";
?>
