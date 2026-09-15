<?php
for ($i = 1; $i <= 30; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$i - Múltiplo de 3 y 5<br>";
    } elseif ($i % 3 == 0) {
        echo "$i - Múltiplo de 3<br>";
    } elseif ($i % 5 == 0) {
        echo "$i - Múltiplo de 5<br>";
    } else {
        echo "$i<br>";
    }
}
?>
