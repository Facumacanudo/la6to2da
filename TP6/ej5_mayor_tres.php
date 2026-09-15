<?php
$a = 15;
$b = 42;
$c = 8;

if ($a >= $b && $a >= $c) {
    echo "El mayor es: $a";
} elseif ($b >= $a && $b >= $c) {
    echo "El mayor es: $b";
} else {
    echo "El mayor es: $c";
}
?>
