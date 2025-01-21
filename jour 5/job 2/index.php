<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Example usage:
bonjour(true); // Output: Bonjour
bonjour(false); // Output: Bonsoir
?>
