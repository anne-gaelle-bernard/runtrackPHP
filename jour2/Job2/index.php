<?php

$excludedNumbers = [26, 37, 88, 1111];

for ($i = 0; $i <= 1337; $i++) {

    if (in_array($i, $excludedNumbers)) {
        continue;
    }
    echo "$i<br>";
}
?>
