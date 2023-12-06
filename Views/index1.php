<?php
function factorial($number) {
    if ($number < 0) {
        return "Error: El número debe ser positivo.";
    } elseif ($number == 0) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

$numero = 5;
echo "El factorial de $numero es: " . factorial($numero);
?>
